@extends('layout.default')
@section('title', 'Profile Talent Researcher')
@section('content')
@include('layout.profile_navbar')
@include('layout.alert')
<div class="flex min-h-screen">
    <aside class="w-60 bg-white-900 text-black p-5 shadow-md">
        <ul class="space-y-2">
            @php
            $activeTab = request('tab', 'data-profile');
            @endphp

            <a href="{{ route('talent.profile', ['tab' => 'data-profile']) }}">             
                <li class="px-4 py-2 hover:bg-blue-900 hover:text-white rounded-lg
                    {{ $activeTab === 'data-profile' ? 'bg-blue-900 text-white rounded-lg' : '' }}">Profile
                </li>
            </a>

            <a href="{{ route('talent.profile', ['tab' => 'dokumen']) }}">
            <li class="px-4 py-2 hover:bg-blue-900 hover:text-white rounded-lg
                    {{ $activeTab === 'dokumen' ? 'bg-blue-900 text-white rounded-lg' : '' }}">CV & Certificate
                </li>
            </a>

            <li class="px-4 py-2 hover:bg-blue-900 hover:text-white rounded-lg">
                <a href="">Project</a>
            </li>

            <li class="px-4 py-2 hover:bg-blue-900 hover:text-white rounded-lg">
                <a href="">Favorite</a>
            </li>

            <li class="text-red-400 px-4 py-2 hover:bg-blue-900 hover:text-white rounded-lg">
                <a href="">Logout</a>
            </li>
        </ul>
    </aside>

    <main class="flex-1 p-8 bg-gray-100">
        @if ($activeTab === 'data-profile')
        @include('talent.partials.data-profile') <!-- manggil tampilan data profile -->
        @elseif ($activeTab === 'dokumen')
        @include('talent.partials.dokumen')
        @endif
    </main>
</div>

@include('layout.contact')
@include('layout.footer')
@endsection