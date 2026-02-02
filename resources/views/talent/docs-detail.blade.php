@extends('layout.default')
@section('title', 'Docs Detail')
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

          <!-- Available Badge -->
          <span class="absolute top-0 right-0 bg-[#0B1F5B] text-white text-sm px-8 py-3 rounded-bl-2xl rounded-tr-2xl">
            Available
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

        <!-- Info Card -->
        <div class="relative bg-white rounded-xl shadow-md p-6 w-full max-w-[320px] mb-10">

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

        <!-- Description -->
        <p class="text-gray-600 leading-relaxed mb-6 max-w-3xl">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
          ut labore et dolore magna aliqua.
        </p>

        <p class="text-gray-600 leading-relaxed max-w-3xl">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
        </p>

      </div>
    </div>

    <!-- ================= ACTION BUTTON ================= -->
    <div
      x-data="{ liked: false }"
      class="fixed bottom-6 right-6 lg:bottom-10 lg:right-12 flex items-center gap-4"
    >
      <!-- Love -->
      <button
        @click="liked = !liked"
        class="w-12 h-12 border border-red-400 rounded-lg flex items-center justify-center transition"
        :class="liked ? 'bg-red-50' : 'bg-white'"
      >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
          class="transition-all duration-200"
          :class="liked 
            ? 'w-7 h-7 fill-red-500 scale-110' 
            : 'w-7 h-7 fill-none stroke-red-500 stroke-2'">
          <path d="M12 21s-6.716-4.35-9.33-7.06C.528 11.797.5 8.777 2.688 6.688 4.776 4.6 8.21 4.888 12 8.5c3.79-3.612 7.224-3.9 9.312-1.812 2.188 2.089 2.16 5.109.018 7.252C18.716 16.65 12 21 12 21z"/>
        </svg>
      </button>

      <!-- Ambil -->
      <button class="bg-[#0B1F5B] text-white px-8 py-4 rounded-xl font-medium hover:bg-[#081947] transition">
        Ambil ↓
      </button>
    </div>

  </div>

@include('layout.contact')
@include('layout.footer')
@endsection
