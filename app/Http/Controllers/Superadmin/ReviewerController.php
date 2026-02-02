<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\ReviewerRequest;
use App\Models\User;

class ReviewerController extends Controller
{
    public function index()
    {
        $reviewers = ReviewerRequest::latest()->get();
        return view('superadmin.reviewer.index', compact('reviewers'));
    }

    public function approve($id)
    {
        $request = ReviewerRequest::findOrFail($id);

        // buat akun user
        User::updateOrCreate(
            ['email' => $request->email],
            [
                'role' => 'reviewer',
                'password' => bcrypt('123456'),
            ]
        );

        $request->update(['status' => 'approved']);

        return back()->with('success', 'Reviewer disetujui');
    }

    public function reject($id)
    {
        ReviewerRequest::where('id', $id)->update(['status' => 'rejected']);
        return back()->with('error', 'Reviewer ditolak');
    }
}
