<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SuperadminProfileController extends Controller
{
    /**
     * Halaman profile superadmin
     */
    public function index()
    {
        return view('superadmin.profile', [
            'user' => Auth::user(),
        ]);
    }

    /**
     * Halaman form ubah password
     */
    public function editPassword()
    {
        return view('superadmin.password_edit');
    }

    /**
     * Proses update password
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();

        // cek password lama
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors([
                'current_password' => 'Password lama salah',
            ]);
        }

        // simpan password baru
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()
            ->route('superadmin.profile')
            ->with('success', 'Password berhasil diperbarui');
    }
}
