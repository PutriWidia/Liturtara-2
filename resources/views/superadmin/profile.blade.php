@extends('layout.default')
@section('title', 'Profile Superadmin')

@section('content')
@include('superadmin.layout.navbar_superadmin')

<section class="bg-gray-50 py-10">
    <div class="max-w-4xl mx-auto px-6">

        <!-- CARD -->
        <div class="bg-white rounded-xl shadow-md p-8">

            <h1 class="text-2xl font-bold text-navy mb-6">
                Profile Superadmin
            </h1>

            <!-- INFO -->
            <div class="space-y-4 text-sm">

                <div class="flex justify-between border-b pb-3">
                    <span class="text-gray-500">Email</span>
                    <span class="font-medium text-navy">
                        {{ Auth::user()->email }}
                    </span>
                </div>

                <div class="flex justify-between border-b pb-3">
                    <span class="text-gray-500">Role</span>
                    <span class="font-medium text-navy capitalize">
                        {{ Auth::user()->role }}
                    </span>
                </div>

                <div class="flex justify-between border-b pb-3">
                    <span class="text-gray-500">Akun Dibuat</span>
                    <span class="font-medium text-navy">
                        {{ Auth::user()->created_at->format('d M Y') }}
                    </span>
                </div>

            </div>

            <!-- ACTION -->
            <div class="mt-8 flex justify-end">
                <a href="{{ route('superadmin.password.edit') }}"
                   class="bg-navy text-white px-5 py-2 rounded-md text-sm hover:bg-blue-800 transition">
                    Ubah Password
                </a>
            </div>

        </div>
    </div>
</section>

@include('layout.footer')
@endsection
