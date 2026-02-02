@extends('layout.default')
@section('title', 'Docs Waiting')
@section('content')
@include('layout.navbar')

  <div class="max-w-[1400px] mx-auto px-6 sm:px-10 lg:px-12 py-10 relative">

    <!-- Back -->
    <a href="#" class="text-sm font-bold text-[#0B1F5B] flex items-center gap-2 mb-4">
      ← Back
    </a>

    <!-- GRID -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16">

      <!-- ================= LEFT CARD ================= -->
      <div class="lg:col-span-4">
        <div
          class="relative bg-white rounded-2xl
                 shadow-[0_20px_40px_rgba(11,31,91,0.12)]
                 min-h-[550px] flex flex-col items-center"
        >

<span class="absolute top-0 right-0 bg-[#9CA3AF] text-white text-sm px-8 py-3 rounded-bl-2xl rounded-tr-2xl font-medium">
  Waiting
</span>


          <!-- Headline -->
          <h2 class="mt-16 text-2xl font-bold text-black">
            Headline
          </h2>

          <!-- Logo + Title -->
          <div
            class="
              flex items-center gap-2
              mt-8 mb-6 w-full

              justify-center px-6 py-8
              sm:justify-start sm:px-10 sm:py-12
              lg:pl-20 lg:py-20
            "
          >
            <img
              src="logo.png"
              alt="Logo"
              class="w-9 h-9 sm:w-10 sm:h-10 object-contain"
            />

            <h3 class="text-xl sm:text-2xl font-bold tracking-wide text-[#0B1F5B]">
              LITURTARA
            </h3>
          </div>

          <!-- Info -->
          <div class="mt-6 text-center">
            <p class="font-medium text-black">John Doe</p>
            <p class="text-sm text-black">UD Maju Jaya</p>
          </div>

          <!-- Date -->
          <div class="mt-auto mb-8 text-xs text-black">
            20 Oktober 2024
          </div>

        </div>
      </div>

      <!-- ================= RIGHT CONTENT ================= -->
      <div class="lg:col-span-8">

        <!-- Title -->
        <h1 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0B1F5B] leading-tight mb-2">
          Lorem ipsum dolor sit amet
        </h1>

        <!-- Categories -->
        <div class="flex flex-wrap gap-3 mb-6">
          <span class="px-3 py-1 text-sm border-2 border-[#0B1F5B] rounded-full text-[#0B1F5B] font-medium">
            Category
          </span>
          <span class="px-3 py-1 text-sm border-2 border-[#0B1F5B] rounded-full text-[#0B1F5B] font-medium">
            Category
          </span>
        </div>

<!-- INFO WRAPPER -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10 max-w-[700px]">

  <!-- INFO CARD -->
  <div class="relative bg-white rounded-xl shadow-md p-6 max-w-[320px] min-h-[100px] w-full">

    <!-- Date Badge -->
    <div class="absolute top-0 right-0 flex items-center gap-2
                bg-gray-200 text-[#0B1F5B] text-xs
                px-4 py-2
                rounded-bl-xl rounded-tr-xl">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="9"/>
        <path d="M12 7v5l3 2"/>
      </svg>
      <span class="font-semibold">15 Des 2024</span>
    </div>

    <!-- User -->
    <div class="flex items-center gap-4 text-sm mb-3">
      <svg class="w-5 h-5 text-[#0C295F]" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 12c2.761 0 5-2.462 5-5.5S14.761 1 12 1 7 3.462 7 6.5 9.239 12 12 12Zm0 2c-4.418 0-8 2.239-8 5v2h16v-2c0-2.761-3.582-5-8-5Z"/>
      </svg>
      <span class="font-bold text-black">John Doe</span>
    </div>

    <!-- Company -->
    <div class="flex items-center gap-4 text-sm mb-3">
      <svg class="w-5 h-5 text-[#0C295F]" fill="currentColor" viewBox="0 0 24 24">
        <path d="M3 22h18v-2H3v2Zm2-4h4V4H5v14Zm6 0h4V2h-4v16Zm6 0h4V8h-4v10Z"/>
      </svg>
      <span class="font-bold text-black">UD Maju Jaya</span>
    </div>

    <!-- Date -->
    <div class="flex items-center gap-4 text-sm">
      <svg class="w-5 h-5 text-[#0C295F]" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7 2h2v2h6V2h2v2h3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h3V2Zm13 8H4v10h16V10Z"/>
      </svg>
      <span class="font-bold text-black">2 Oktober 2024</span>
    </div>

    <a href="#" class="block text-right text-sm font-semibold text-[#0B1F5B] mt-4">
      View Profile
    </a>
  </div>

  <!-- DISOLUSIKAN OLEH -->
  <div class="bg-white rounded-xl shadow-md p-6 max-w-[320px] w-full">

    <p class="text-sm text-gray-500 mb-3">
      Disolusikan oleh:
    </p>

    <div class="flex items-center gap-4 text-sm mb-2">
      <svg class="w-5 h-5 text-[#0C295F]" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 12c2.761 0 5-2.462 5-5.5S14.761 1 12 1 7 3.462 7 6.5 9.239 12 12 12Zm0 2c-4.418 0-8 2.239-8 5v2h16v-2c0-2.761-3.582-5-8-5Z"/>
      </svg>
      <span class="font-bold text-black">Muhammad Patel</span>
    </div>

    <div class="flex items-center gap-4 text-sm mb-3">
      <svg class="w-5 h-5 text-[#0C295F]" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 2 2 7l10 5 10-5-10-5Zm0 7 10 5v6l-10-5-10 5v-6l10-5Z"/>
      </svg>
      <span class="font-bold text-black">Universitas Haluoleo</span>
    </div>

<div class="flex items-center justify-between mt-4">
  
  <!-- Rating -->
  <div class="flex items-center gap-1 text-yellow-400 text-sm">
    ★ ★ ★ ★ ★
    <span class="text-gray-500">(2)</span>
  </div>

  <!-- View Profile -->
  <a href="#" class="text-sm font-semibold text-[#0B1F5B] hover:underline">
    View Profile
  </a>
</div>
</div>
    </div>
    <!-- DESCRIPTION (FULL WIDTH, ATAS–BAWAH) -->
<div class="max-w-[900px] space-y-6">
  <p class="text-gray-600 leading-relaxed mb-6 max-w-3xl">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
  </p>

  <p class="text-gray-600 leading-relaxed mb-6 max-w-3xl">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
  </p>
</div>
  </div>

@include('layout.contact')
@include('layout.footer')
@endsection
