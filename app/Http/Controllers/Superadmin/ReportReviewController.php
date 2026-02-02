<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReportReview;

class ReportReviewController extends Controller
{
    // Tampilkan daftar report
    public function index()
    {
        $reports = ReportReview::all();
        return view('superadmin.report-review.index', compact('reports'));
    }

    public function update(Request $request, $id)
    {
    // Validasi input
    $validated = $request->validate([
        'status' => 'required|in:resolved,rejected',
        'admin_action' => 'required|string|max:255',
    ]);

    // Cari report berdasarkan id
    $report = ReportReview::findOrFail($id);

    // Update data
    $report->status = $validated['status'];
    $report->admin_action = $validated['admin_action'];
    $report->save(); // << ini simpan ke database

    // Redirect kembali ke index dengan pesan sukses
    return redirect()->route('superadmin.report-review.index')
                     ->with('success', 'Keputusan report berhasil disimpan.');
    }
}