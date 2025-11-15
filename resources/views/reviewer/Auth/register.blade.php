@extends('layout.default')
@section('title', 'Register as Reviewer')

@section('content')
    @include('layout.reviewer.header_before')

    <main class="py-10 lg:py-0">
        <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <!-- Left -->
            <div class="flex justify-center lg:block">
                <img src="{{ asset('image/logo.svg') }}" alt="Liturtara Logo" class="max-w-full h-auto" />
            </div>

            <!-- Right -->
            <div class="max-w-md w-full space-y-6 mx-auto">
                @include('layout.alert-auth')
                <img src="{{ asset('image/LogoLiturtara1.png') }}" alt="Liturtara" class="h-10 mb-2 mx-auto" />
                <h2 class="text-2xl font-bold text-center">Sign Up Reviewer</h2>

                <form id="registerForm" class="space-y-4" action="{{ route('reviewer.register.post') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Email"
                        class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring focus:ring-blue-300"
                        required />
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror

                    <input type="text" name="phone_number" placeholder="Phone number"
                        class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring focus:ring-blue-300"
                        required />
                    @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror

                    <input type="password" name="password" placeholder="Password"
                        class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring focus:ring-blue-300"
                        required />
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror

                    <input type="password" name="password_confirmation" placeholder="Confirm Password"
                        class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring focus:ring-blue-300"
                        required />
                    @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror

                    <button type="submit" class="w-full bg-navy text-white p-3 rounded hover:bg-white">
                        Register
                    </button>

                    <div class="space-y-2 text-sm">
                        <label class="flex items-start gap-2">
                            <input type="checkbox" required class="mt-1">
                            Agree to <a href="#" class="underline text-navy">Terms & Conditions</a> and 
                            <a href="#" class="underline text-navy">Privacy Policy</a>
                        </label>
                        <label class="flex items-start gap-2">
                            <input type="checkbox" required class="mt-1">
                            I agree to comply with the <strong>Personal Data Protection Law</strong>
                        </label>
                    </div>

                    <a href="{{ route('google.login', ['role' => 'reviewer']) }}"
                        class="flex items-center justify-center gap-3 w-full border p-3 rounded hover:bg-gray-100">
                        <img src="{{ asset('image/google.svg') }}" alt="Google" class="h-5" /> Sign up with Google
                    </a>

                    <p class="text-sm text-center">Already have an account?
                        <a href="{{ route('reviewer.login') }}" class="text-navy underline">Log in</a>
                    </p>
                </form>
            </div>
        </div>
    </main>

    @include('layout.footer')
@endsection
