@extends('layout.default')
@section('title', 'Thank You Payment')
@section('content')
@include('layout.navbar_after')

  <div class="max-w-6xl mx-auto w-full px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12">

      <!-- LEFT : CIRCLE LOGO -->
        <div class="flex justify-center md:justify-end pr-12">
            <div class="relative flex items-center justify-center">

    <!-- Outer Navy Ring -->
    <div class="w-[340px] h-[340px] rounded-full border-[10px] border-[#0B1F5B] flex items-center justify-center">

      <!-- Green Ring -->
      <div class="w-[295px] h-[295px] rounded-full border-[8px] border-[#38B24A] flex items-center justify-center">

        <!-- Inner Navy Ring -->
        <div class="w-[250px] h-[250px] rounded-full border-[8px] border-[#0B1F5B] flex items-center justify-center">

          <!-- Center Circle -->
          <div class="w-[200px] h-[200px] rounded-full bg-gradient-to-br from-[#E0F7EE] to-[#E4EDFF] flex items-center justify-center">

            <!-- LOGO -->
            <img
              src="logo.png"
              alt="Liturtara Logo"
              class="w-28 h-28 object-contain"
            />

          </div>
        </div>
      </div>
    </div>

  </div>
</div>


      <!-- RIGHT : TEXT -->
      <div>
        <h1 class="text-3xl md:text-4xl font-bold text-[#0B1F5B] leading-snug">
          Redeem successful,<br>
          please enjoy Liturtara services
        </h1>

        <button
          class="mt-6 inline-flex items-center gap-2 bg-[#0B1F5B] text-white px-6 py-3 rounded-lg text-sm font-medium hover:bg-[#081947] transition">
          ← Back
        </button>
      </div>

    </div>
  </div>

  <!-- Bottom Navy Bar -->
  <div class="absolute bottom-0 left-0 w-full h-20 bg-[#0B1F5B]"></div>

@include('layout.contact')
@include('layout.footer')
@endsection 
