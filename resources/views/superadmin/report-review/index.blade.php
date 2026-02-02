@extends('layout.default')

@section('content')
<div class="container mx-auto px-6 py-8">

    <h1 class="text-2xl font-bold mb-6">Report Review</h1>

    {{-- Flash message sukses --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    @forelse($reports as $report)
        <div class="bg-white shadow rounded-lg p-5 mb-4">

            <p><strong>Pelapor:</strong> {{ $report->reporter->email ?? '-' }}</p>
            <p><strong>Dilaporkan:</strong> {{ $report->reportedUser->email ?? '-' }}</p>
            <p><strong>Alasan:</strong> {{ $report->reason }}</p>

            <p class="mt-2">
                Status:
                <span class="px-2 py-1 rounded text-sm
                    {{ $report->status == 'pending' ? 'bg-yellow-200' : '' }}
                    {{ $report->status == 'resolved' ? 'bg-green-200' : '' }}
                    {{ $report->status == 'rejected' ? 'bg-red-200' : '' }}">
                    {{ ucfirst($report->status) }}
                </span>
            </p>

            {{-- Form update keputusan --}}
            <form method="POST"
                  action="{{ route('superadmin.report-review.update', $report->report_id) }}"
                  class="mt-4">
                @csrf
                @method('PUT') {{-- penting: ubah POST menjadi PUT --}}

                <div class="mb-2">
                    <label class="block text-sm font-medium mb-1">Status:</label>
                    <select name="status" class="border rounded px-3 py-1 w-full">
                        <option value="resolved" {{ $report->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
                        <option value="rejected" {{ $report->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                </div>

                <div class="mb-2">
                    <label class="block text-sm font-medium mb-1">Tindakan Admin:</label>
                    <textarea name="admin_action"
                              class="w-full border rounded mt-1 p-2"
                              placeholder="Tindakan admin (contoh: Warning reviewer)"
                              required>{{ old('admin_action', $report->admin_action) }}</textarea>
                </div>

                <button type="submit" class="mt-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Simpan Keputusan
                </button>
            </form>

        </div>
    @empty
        <p class="text-gray-500">Belum ada laporan.</p>
    @endforelse

</div>
@endsection
