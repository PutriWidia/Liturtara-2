@extends('layout.default')
@section('title', 'Reviewer Sign In')

@section('content')
    @include('layout.reviewer.header_before')

    <main class="container mx-auto py-8 px-4 md:px-0">
        <div class="flex flex-col md:flex-row items-center">
            <!-- Left Side -->
            <div class="flex justify-center lg:block">
                <img src="{{ asset('image/logo.svg') }}" alt="Liturtara Logo" class="max-w-full h-auto" />
            </div>

            <!-- Right Side -->
            <div class="w-full md:w-1/2 mt-8 md:mt-0">
                <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
                    {{-- alert --}}
                    @include('layout.alert-auth')

                    <div class="mb-6 flex justify-start">
                        <img src="{{ asset('image/LogoLiturtara1.png') }}" alt="LITURTARA Logo" class="h-10">
                    </div>

                    <h2 class="text-2xl font-bold text-navy mb-6">Log in Reviewer</h2>

                    <form action="{{ route('reviewer.login.post') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email"
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-navy">
                            @if ($errors->has('email'))
                                <span class="text-red-500">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="mb-6 relative">
                            <label for="password" class="block text-gray-700 mb-2">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password"
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-navy">
                            @if ($errors->has('password'))
                                <span class="text-red-500">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <button type="submit" class="w-full bg-navy text-white py-2 rounded-md font-medium">
                            Log in
                        </button>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-gray-500">or</p>
                    </div>

                    <a href="{{ route('google.login', ['role' => 'reviewer']) }}"
                        class="w-full mt-4 py-2 px-4 border border-gray-300 rounded-md flex items-center justify-center space-x-2 hover:bg-gray-100">
                        <img src="{{ asset('image/google.svg') }}" class="w-5 h-5" alt="Google"> 
                        <span>Log in with Google</span>
                    </a>

                    <div class="mt-6 text-center">
                        <a href="{{ route('password.request') }}" class="text-navy hover:underline">Forgot password?</a>
                    </div>

                    <div class="mt-6 text-center">
                        <p class="text-gray-700">
                            New to Liturtara?
                            <a href="{{ route('reviewer.register') }}" class="text-navy font-medium hover:underline">
                                Sign up
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layout.footer')
@endsection
