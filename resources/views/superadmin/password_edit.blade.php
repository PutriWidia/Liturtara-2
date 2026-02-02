@extends('superadmin.layout.app')

@section('title', 'Ubah Password')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-xl shadow">
    <h1 class="text-xl font-bold text-navy mb-6">Ubah Password</h1>

    @if (session('success'))
        <div class="mb-4 text-green-600 text-sm">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('superadmin.password.update') }}">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Password Lama</label>
            <input type="password" name="current_password"
                   class="w-full border rounded-md px-3 py-2">
            @error('current_password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Password Baru</label>
            <input type="password" name="password"
                   class="w-full border rounded-md px-3 py-2">
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium mb-1">Konfirmasi Password</label>
            <input type="password" name="password_confirmation"
                   class="w-full border rounded-md px-3 py-2">
        </div>

        <button class="bg-navy text-white px-4 py-2 rounded-md">
            Simpan Perubahan
        </button>
    </form>
</div>
@endsection
