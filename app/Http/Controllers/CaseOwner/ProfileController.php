<?php

namespace App\Http\Controllers\CaseOwner;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display profile page
     */
    public function index()
    {
        $user = Auth::user();

        $profile = Profile::firstOrCreate(
            ['user_id' => $user->id],
            ['full_name' => $user->name],
        );

        return view('caseowner.profile.index', compact('user', 'profile'));
    }

    /**
     * Update profile data
     */
   public function update(Request $request)
{
    $request->validate([
        'full_name'    => 'sometimes|required|string|max:255',
        'phone_number' => 'nullable|string|max:20',
        'birth_date'   => 'nullable|date',
        'gender'       => 'nullable|in:male,female,other',
        'address'      => 'nullable|string|max:255',
    ]);

    $profile = Profile::where('user_id', Auth::id())->firstOrFail();

    // ambil hanya field yg ada di request
    $data = $request->only([
        'full_name',
        'phone_number',
        'birth_date',
        'gender',
        'address',
    ]);

    // buang field kosong (null)
    $data = array_filter($data, fn ($v) => $v !== null);

    $profile->update($data);

    return back()->with('success', 'Profile berhasil diperbarui');
}


    /**
     * 🔥 UPDATE PHOTO (INI YANG BARU)
     */
    public function updatePhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $profile = Profile::where('user_id', Auth::id())->firstOrFail();

        // hapus foto lama
        if ($profile->photo) {
            Storage::disk('public')->delete($profile->photo);
        }

        // simpan foto baru
        $path = $request->file('photo')->store('profile', 'public');

        $profile->update([
            'photo' => $path,
        ]);

        return back()->with('success', 'Photo berhasil diperbarui');
    }
}
