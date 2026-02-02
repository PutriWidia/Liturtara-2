<nav class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
    <!-- LOGO -->
    <div class="flex items-center gap-4">
        <img src="{{ asset('image/LogoLiturtara1.png') }}" class="h-8" alt="Liturtara">
    </div>

    <!-- ACCOUNT DROPDOWN -->
    <div class="relative">
        <!-- BUTTON -->
        <button id="accountBtn"
            class="flex items-center gap-2 text-sm font-medium border-2 border-navy text-navy px-4 py-2 rounded-md
                   hover:bg-navy hover:text-white transition">
            Account
        </button>

        <!-- DROPDOWN -->
        <div id="accountDropdown"
             class="hidden absolute right-0 mt-2 w-44 bg-white rounded-lg shadow-lg border z-50">
            
            <!-- PROFILE -->
            <a href="{{ route('superadmin.profile') }}"
               class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100">
                Profile
            </a>

            <!-- DIVIDER -->
            <div class="border-t"></div>

            <!-- LOGOUT -->
            <form action="{{ route('superadmin.logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-3 text-sm text-red-600 hover:bg-gray-100">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>

<!-- SCRIPT DROPDOWN -->
<script>
    const btn = document.getElementById('accountBtn');
    const dropdown = document.getElementById('accountDropdown');

    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdown.classList.toggle('hidden');
    });

    window.addEventListener('click', () => {
        dropdown.classList.add('hidden');
    });
</script>
