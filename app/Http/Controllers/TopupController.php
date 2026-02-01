<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\TokenTransactions;
use Midtrans\Snap;
use Midtrans\Config;
use Symfony\Component\Routing\Route;

class TopupController extends Controller
{
    // public function __construct()
    // {
    //     // Midtrans setup
    //     Config::$serverKey = env('MIDTRANS_SERVER_KEY');
    //     Config::$isProduction = false;
    //     Config::$isSanitized = true;
    //     Config::$is3ds = true;
    // }

    public function showForm()
    {
        $user = Auth::user();

        // Talent hanya boleh topup 1x saat registrasi
        // if ($user->role === 'talent') {
        //     // $hasTopup = TokenTransactions::where('user_id', $user->id)->exists();
        //     $token = Token::where('user_id', $user->id)->value('amount');
        //     if ($token >= 5) {
        //         return redirect()->back()->with('error', 'Talent hanya bisa top up sekali saat registrasi.');
        //     }
        // }

        return view('token.topup-form');
    }

    public function checkout(Request $request)
    {
        $user = Auth::user();

        // $role = $user->role;
        // $profile = Profile::where('user_id', $user->id)->first();

        $profile = match ($user->role) {
            'talent' => $user->profileTalent,
            // 'case owner' => $user->ownerProfile,
            // 'reviewer' => $user->reviewerProfile,
            default => null,
        };

        $request->validate([
            'token_amount' => 'required|integer|in:5,10,20,50',
        ]);

        //harga token
        $price = $request->token_amount * 2500;
        $tax = $price * 0.11;
        $finalPrice = $price + $tax;

        $orderId = 'TOPUP-' . Str::uuid();

        $transaction = TokenTransactions::create([
            'user_id' => $user->id,
            'order_id'     => $orderId,
            'token_amount' => $request->token_amount,
            'total_price' => $finalPrice,
            'status' => 'pending'
        ]);

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $transaction->order_id,
                'gross_amount' => $transaction->total_price,
            ],
            'customer_details' => [
                'name' => $profile->full_name ?? $user->name,
                'email' => $user->email,
                'phone' => $profile->phone_number ?? '',
            ],
            'callbacks' => [
                'finish' => route('token.topup.success'),
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        // $transaction->snap_token = $snapToken;
        // $transaction->save();

        // @dd($snapToken);
        return view('token.payment', compact('snapToken', 'transaction', 'price'));
    }

    public function success()
    {
        return view('token.success');
    }

    // public function callback(Request $request)
    // {
    //     $serverKey = config('midtrans.server_key');
    //     $hashed = hash("SHA512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

    //     if ($hashed == $request->signature_key) {
    //         if ($request->transaction_status === 'capture' || $request->transaction_status === 'settlement') {
    //             $transaction = TokenTransactions::where('order_id', $request->order_id)->first();

    //             if ($transaction && $transaction->status !== 'paid') {
    //                 // Update status & payment_type
    //                 $transaction->update([
    //                     'status' => 'paid',
    //                     'payment_type' => $request->payment_type // <--- tambahkan ini
    //                 ]);

    //                 // Ambil atau buat token user
    //                 $token = Token::firstOrCreate(
    //                     ['user_id' => $transaction->user_id],
    //                     ['amount' => 0]
    //                 );

    //                 $token->increment('amount', $transaction->token_amount);
    //                 $token->touch();
    //             }
    //         }
    //     }

    //     return response()->json(['message' => 'Callback processed']);
    // }

    public function callback(Request $request)
    {
        Log::info('Midtrans callback masuk', $request->all());

        if (!$request->order_id) {
            Log::error('Callback tanpa order_id');
            return response()->json(['message' => 'Invalid callback'], 400);
        }

        $serverKey = config('midtrans.server_key');
        $hashed = hash(
            'sha512',
            $request->order_id .
                $request->status_code .
                $request->gross_amount .
                $serverKey
        );

        if ($hashed !== $request->signature_key) {
            Log::warning('Signature mismatch DETAIL', [
                'expected' => $hashed,
                'received' => $request->signature_key,
                'order_id' => $request->order_id,
                'status_code' => $request->status_code,
                'gross_amount' => $request->gross_amount,
            ]);

            return response()->json(['message' => 'Invalid signature'], 403);
        }

        $transaction = TokenTransactions::where('order_id', $request->order_id)->first();

        Log::info('DEBUG STATUS', [
            'transaction_status_midtrans' => $request->transaction_status,
            'transaction_status_table' => $transaction->status,
            'signature_valid' => ($hashed === $request->signature_key),
        ]);


        if (!$transaction) {
            Log::error('Transaction not found', ['order_id' => $request->order_id]);
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        if (in_array($request->transaction_status, ['capture', 'settlement'])) {
            if ($transaction->status !== 'paid') {

                Log::info('MASUK BLOK INCREMENT');

                $transaction->update([
                    'status' => 'paid',
                    'payment_type' => $request->payment_type,
                ]);

                $token = Token::firstOrCreate(
                    ['user_id' => $transaction->user_id],
                    ['amount' => 0]
                );

                $token->increment('amount', $transaction->token_amount);
            }
        }

        return response()->json(['message' => 'OK']);
    }
}
