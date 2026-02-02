@extends('layout.default')
@section('title', 'Super Admin Dashboard')

@section('content')
@include('superadmin.layout.navbar_superadmin')

<!-- HERO SECTION -->
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

<!-- LOG ACTIVITY CONTENT -->
<section class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-xl font-bold text-gray-800 mb-8">
            Log Activity
        </h2>

        <!-- TIMELINE -->
        <div class="relative ml-6">

            <!-- VERTICAL LINE -->
            <div class="absolute left-3 top-0 bottom-0 w-0.5 bg-gray-300"></div>

            @forelse ($logs as $log)
                <div class="relative flex items-start mb-10">

                    <!-- DOT -->
                    <div class="absolute left-0 top-1">
                        <div class="w-6 h-6 rounded-full
                             {{ \App\Helpers\LogHelper::dotColor($log->activity) }}
                            border-4 border-white">
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="ml-10 w-full max-w-3xl bg-navy text-white rounded-xl shadow-md p-5">

                        <!-- USER -->
                        <div class="flex items-center mb-2">
                            <div
                                class="w-9 h-9 rounded-full bg-white text-navy
                                       flex items-center justify-center font-bold mr-3">
                                {{ strtoupper(substr(optional($log->user)->name ?? 'U', 0, 1)) }}
                            </div>

                            <span class="font-semibold text-sm">
                                {{ optional($log->user)->name ?? 'Unknown User' }}
                            </span>
                        </div>

                        <!-- ACTIVITY -->
                        <p class="text-sm leading-relaxed">
                            {{ $log->activity }}
                        </p>

                        <!-- TIME -->
                        <p class="text-xs mt-2 text-blue-100">
                            {{ $log->created_at?->format('d M Y • H:i') }}
                        </p>
                    </div>
                </div>
            @empty
                <p class="text-gray-500 ml-10">
                    Belum ada aktivitas tercatat.
                </p>
            @endforelse

        </div>

        <!-- PAGINATION -->
        <div class="mt-10">
            {{ $logs->links() }}
        </div>

    </div>
</section>

@include('layout.footer')
@endsection
