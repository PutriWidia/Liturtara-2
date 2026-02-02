@extends('layout.default')
@section('title', 'Superadmin Sign In')

@section('content')
    <!-- Main Content -->
    <main class="container mx-auto py-16 px-4">
        <div class="flex justify-center items-center">
            <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">

                {{-- Alert --}}
                @include('layout.alert-auth')

                <div class="mb-6 flex justify-center">
                    <img src="{{ asset('image/LogoLiturtara1.png') }}" alt="LITURTARA Logo" class="h-12">
                </div>

                <h2 class="text-2xl font-bold text-navy mb-6 text-center">
                    Superadmin Login
                </h2>

                <form action="{{ route('superadmin.login.post') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" placeholder="Email"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-navy"
                            required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 mb-2">Password</label>
                        <input type="password" name="password" placeholder="Password"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-navy"
                            required>
                    </div>

                    <button type="submit"
                        class="w-full bg-navy text-white py-2 rounded-md font-medium">
                        Log in
                    </button>
                </form>

            </div>
        </div>
    </main>
@endsection
