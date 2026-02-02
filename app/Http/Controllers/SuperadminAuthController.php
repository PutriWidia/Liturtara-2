<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SuperadminAuthController extends Controller
{

    public function showLogin()
    {
        return view('superadmin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {

            // Pastikan hanya superadmin
            if (Auth::user()->role !== 'superadmin') {
                Auth::logout();
                return back()->with('error', 'Bukan akun superadmin');
            }

            $request->session()->regenerate();

            return redirect()->route('superadmin.dashboard');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('superadmin.login');
    }

    public function dashboard()
    {
        // Ambil SEMUA user dengan role reviewer
        // TANPA status (karena kolom belum ada)
        $reviewers = User::where('role', 'reviewer')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('superadmin.dashboard', compact('reviewers'));
    }
}
