<nav class="bg-white shadow-md py-4 px-6 flex justify-between items-center relative">
    <!-- Logo -->
    <div class="flex items-center space-x-4">
        <img src="{{ asset('image/LogoLiturtara1.png') }}" alt="Liturtara Logo" class="h-8">
    </div>

    <!-- Menu Navigasi -->
    <div class="hidden md:flex flex-row md:space-x-4 flex-grow ml-6 text-sm">
        @if (session("role") == "case owner")
            <a href="{{ route('caseowner.dashboard') }}" class="font-medium text-navy hover:text-blue-700 py-2 px-4">Home</a>
        @elseif (session("role") == "talent")
            <a href="{{ route('talent.dashboard') }}" class="font-medium text-navy hover:text-blue-700 py-2 px-4">Home</a>
        @endif

        <a href="{{ route('homepage') }}" class="font-medium text-navy hover:text-blue-700 py-2 px-4">Home</a>
        <a href="{{ route('about') }}" class="font-medium text-navy hover:text-blue-700 py-2 px-4">About Us</a>
        <a href="{{ url('/#layanan') }}" class="font-medium text-navy hover:text-blue-700 py-2 px-4">Service</a>
        <a href="{{ url('/#berita') }}" class="font-medium text-navy hover:text-blue-700 py-2 px-4">News</a>
        <a href="{{ url('/#contact') }}" class="font-medium text-navy hover:text-blue-700 py-2 px-4">Our Contact</a>
    </div>

    <!-- Bagian Kanan Navbar -->
    <div class="flex items-center space-x-4">
        <!-- PRICE -->
        <div class="flex items-center">
            <button class="text-sm text-gray-700 hover:text-navy font-medium">
                {{ session("Price") ?? "Price" }}
            </button>
        </div>

        <!-- LANGUAGE -->
        <div class="relative">
            <button id="languageButton" class="relative">
                <img src="{{ asset('image/language.png') }}" alt="Language" class="w-6 h-6" />
            </button>
            <div id="languageDropdown"
                 class="hidden absolute right-0 mt-2 w-40 bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden z-50">
                <div class="px-4 py-3 border-b border-gray-200">
                    <h4 class="font-bold text-blue-900 text-sm">Choose Language</h4>
                </div>
                <ul class="divide-y divide-gray-100">
                    <li class="flex items-center gap-2 px-4 py-2 hover:bg-gray-50 cursor-pointer">
                        <span class="text-sm text-gray-700 font-medium">Bahasa Indonesia</span>
                    </li>
                    <li class="flex items-center gap-2 px-4 py-2 hover:bg-gray-50 cursor-pointer">
                        <span class="text-sm text-gray-700 font-medium">English</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- SIGN IN / SIGN UP -->
        <div class="relative">
            <button id="authButton"
                class="inline-flex items-center justify-center h-10 px-5 border border-navy text-navy font-semibold rounded-lg text-sm">
                Sign In / Sign Up
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 9l-7 7-7-7"/>
                </svg>
            </button>

            <div id="authDropdown"
                 class="hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-200 z-50">
                <a href="{{ route('talent.login') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Talent</a>
                <a href="{{ route('caseowner.login') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Case Owner</a>
                <a href="{{ route('reviewer.login') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Reviewer</a>
            </div>
        </div>
    </div>
</nav>

<!-- Script semua di bawah -->
<script>
    // Sign In / Sign Up Dropdown
    const authButton = document.getElementById('authButton');
    const authDropdown = document.getElementById('authDropdown');

    authButton.addEventListener('click', (e) => {
        e.stopPropagation();
        authDropdown.classList.toggle('hidden');
    });

    // Language Dropdown
    const languageButton = document.getElementById('languageButton');
    const languageDropdown = document.getElementById('languageDropdown');

    languageButton.addEventListener('click', (e) => {
        e.stopPropagation();
        languageDropdown.classList.toggle('hidden');
    });

    // Tutup dropdown saat klik di luar
    window.addEventListener('click', (e) => {
        if (!authButton.contains(e.target) && !authDropdown.contains(e.target)) {
            authDropdown.classList.add('hidden');
        }
        if (!languageButton.contains(e.target) && !languageDropdown.contains(e.target)) {
            languageDropdown.classList.add('hidden');
        }
    });
</script>
