<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\DokTalent;
use App\Models\ProfileTalent;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

// use App\Models\ProfileTalent as ModelsProfileTalent;

class ProfileTalentController extends Controller
{
    public function index()
    {
        $gender = ['male', 'female', 'other'];
        return view('talent.profile', compact('gender'));
    }

    public function store(request $request)
    {
        $validated = $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,heic|max:2048',
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'birth_date' => 'required|date',
            'address' => 'required|string|max:500',
            'gender' => 'required|in:male,female,other',
            'agency' => 'required|string|max:255',
            'last_education' => 'required|string|max:255',
            'achievements' => 'required|integer|min:0',
            'linkedin' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
        ]);

        $profile = ProfileTalent::updateOrCreate(
            ['user_id' => Auth::id()],
            $validated
        );

        return back()->with('success', 'Profile berhasil disimpan');
    }

    public function uploadCv(Request $request)
    {
        $request->validate([
            'cv' => 'required|mimes:pdf,jpg,jpeg,png|max:10240',
        ]);

        $profile = Auth::user()->profileTalent;

        // hapus CV lama jika ada
        if ($profile->cv) {
            Storage::disk('public')->delete($profile->cv);
        }

        // simpan CV baru
        $path = $request->file('cv')->store('cv', 'public');

        $profile->update([
            'cv' => $path
        ]);

        return back()->with('success', 'CV updated successfully');
    }

    public function uploadCertificate(Request $request)
    {
        $request->validate([
            'certificate' => 'required|mimes:pdf,jpg,jpeg,png|max:10240',
            'title' => 'nullable|string|max:255'
        ]);

        $path = $request->file('certificate')->store('certificates', 'public');

        DokTalent::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'file_path' => $path
        ]);

        return back()->with('success', 'Certificate uploaded');
    }

    public function deleteCertificate($id)
{
    $cert = DokTalent::where('user_id', Auth::id())->findOrFail($id);

    Storage::disk('public')->delete($cert->file_path);

    $cert->delete();

    return back()->with('success', 'Certificate deleted');
}

}
