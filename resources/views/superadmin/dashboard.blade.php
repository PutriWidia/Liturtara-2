@extends('layout.default')
@section('title', 'Super Admin Dashboard')

@section('content')
@include('superadmin.layout.navbar_superadmin')

{{-- HERO --}}
<section class="relative w-full h-[380px] overflow-hidden rounded-b-3xl mb-12">
    <img src="{{ asset('image/Group 770.png') }}"
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/40"></div>

            <div class="absolute bottom-8 left-10">
                <h1 class="text-3xl font-bold text-navy">Super Admin</h1>
                <p class="text-gray-700 text-sm mt-2">
                    Kelola reviewer, aktivitas, dan sistem Liturtara
                </p>
            </div>
</section>

<!-- TAB MENU -->
<section class="bg-white shadow-md -mt-6 relative z-10">
    <div class="max-w-7xl mx-auto px-6">
        @php
            $active = 'text-navy border-b-2 border-navy pb-2';
            $inactive = 'text-gray-500 hover:text-navy';
        @endphp

        <nav class="flex gap-8 py-4 text-sm font-semibold">
            <a href="{{ route('superadmin.dashboard') }}"
               class="{{ request()->routeIs('superadmin.dashboard') ? $active : $inactive }}">
                Approve Reviewer
            </a>

            <a href="#"
               class="{{ request()->is('superadmin/report*') ? $active : $inactive }}">
                Report Reviewer
            </a>

            <a href="#"
               class="{{ request()->is('superadmin/token*') ? $active : $inactive }}">
                Transfer Token
            </a>

            <a href="{{ route('superadmin.log-activity') }}"
               class="{{ request()->routeIs('superadmin.log-activity') ? $active : $inactive }}">
                Log Activity
            </a>

            <a href="{{ route('superadmin.news.index') }}"
               class="{{ request()->routeIs('superadmin.news.*') ? $active : $inactive }}">
                News
            </a>
        </nav>
    </div>
</section>

{{-- CONTENT --}}
<section class="bg-gray-50 py-10">
    <div class="max-w-7xl mx-auto px-8 grid grid-cols-1 md:grid-cols-3 gap-6">

        @forelse ($reviewers as $reviewer)
            <div class="bg-white rounded-xl shadow-md p-6 relative">

                <span class="absolute top-4 right-4 text-xs bg-yellow-400 text-white px-3 py-1 rounded-full">
                    Pending
                </span>

                <h3 class="text-navy font-bold text-lg mb-1">
                    {{ $reviewer->name }}
                </h3>

                <p class="text-sm text-gray-600 mb-4">
                    {{ $reviewer->email }}
                </p>

                <div class="flex justify-between items-center text-xs text-gray-500 mb-4">
                    <span>Reviewer</span>
                    <span>{{ $reviewer->created_at->format('d M Y') }}</span>
                </div>

                <div class="flex gap-3">
                    <button
                        class="flex-1 bg-navy text-white py-2 rounded-md text-sm hover:bg-blue-900">
                        Approve
                    </button>

                    <button
                        class="flex-1 border border-red-500 text-red-500 py-2 rounded-md text-sm hover:bg-red-50">
                        Reject
                    </button>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center text-gray-500 py-20">
                Tidak ada reviewer yang menunggu persetujuan
            </div>
        @endforelse

    </div>
</section>

@include('layout.footer')
@endsection
