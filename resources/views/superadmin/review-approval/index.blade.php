@extends('layout.default')

@section('title', 'Super Admin - Approve Reviewer')

@section('content')
@include('layout.navbar_after')

<div class="max-w-7xl mx-auto px-6 py-8">

    <h1 class="text-2xl font-bold text-navy mb-6">
        Approve Reviewer
    </h1>

    <div class="grid grid-cols-12 gap-6">

        {{-- ================= LEFT : LIST REVIEW ================= --}}
        <div class="col-span-5 space-y-4">

            @forelse ($reviews as $r)
                <a href="{{ route('superadmin.review-approval.index', ['review_id' => $r->id]) }}"
                   class="block bg-white rounded-xl p-4 shadow
                   hover:border-navy border
                   {{ optional($selectedReview)->id == $r->id ? 'border-navy bg-blue-50' : 'border-transparent' }}">

                    <div class="flex justify-between items-start">
                        <p class="font-semibold">
                            {{ $r->solution?->case?->title ?? 'Case tidak ditemukan' }}
                        </p>

                        <span class="text-xs px-3 py-1 rounded-full bg-yellow-100 text-yellow-700">
                            Pending
                        </span>
                    </div>

                    <div class="text-sm text-gray-600 mt-2">
                        Reviewer: {{ $r->reviewer?->email ?? 'User tidak ditemukan' }}
                    </div>

                    <div class="text-xs text-gray-500 mt-1">
                        {{ $r->created_at->format('d M Y') }}
                    </div>

                </a>
            @empty
                <div class="text-gray-500 text-sm">
                    Tidak ada review yang menunggu approval
                </div>
            @endforelse

        </div>

        {{-- ================= RIGHT : DETAIL ================= --}}
        <div class="col-span-7">

            @if($selectedReview)

            <div class="mt-6">
                <label class="font-semibold">Catatan Admin</label>
                <textarea id="admin_note"
                        class="w-full border rounded p-2 mt-1"
                        placeholder="Alasan jika ditolak (wajib untuk decline)"></textarea>
            </div>

            <div class="flex gap-3 mt-4">

                <!-- APPROVE -->
                <form method="POST"
                    action="{{ route('superadmin.review-approval.approve', $selectedReview->id) }}">
                    @csrf
                    <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded">
                        Approve
                    </button>
                </form>

                <!-- DECLINE -->
                <form method="POST"
                    action="{{ route('superadmin.review-approval.reject', $selectedReview->id) }}">
                    @csrf
                    <input type="hidden" name="admin_note" value="Ditolak oleh superadmin">

                    <button type="submit"
                        class="bg-red-600 text-white px-4 py-2 rounded">
                        Decline
                    </button>
                </form>
            </div>

            @endif

        </div>

    </div>
</div>

@include('layout.footer')
@endsection
