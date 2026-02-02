@extends('layout.default')
@section('title', 'Thank You Topup')
@section('content')
@include('layout.navbar')

  <div class="max-w-7xl mx-auto w-full px-10">
    <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12">

      <!-- ================= LEFT IMAGE ================= -->
      <div class="flex justify-center">
        <!-- WRAPPER (CENTER POINT) -->
        <div class="relative w-[440px] h-[440px] flex items-center justify-center">

          <!-- OUTER BLUE -->
          <div class="absolute inset-0 m-auto w-[440px] h-[440px] rounded-full border-[10px] border-[#0B1F5B]"></div>

          <!-- MIDDLE GREEN -->
          <div class="absolute inset-0 m-auto w-[380px] h-[380px] rounded-full border-[10px] border-[#38B24A]"></div>

          <!-- INNER BLUE -->
          <div class="absolute inset-0 m-auto w-[320px] h-[320px] rounded-full border-[10px] border-[#0B1F5B]"></div>

          <!-- IMAGE -->
          <img
            src="woman1.png"
            alt="Success"
            class="relative z-10 w-[350px] object-contain"
          />
        </div>
      </div>

      <!-- ================= RIGHT CONTENT ================= -->
      <div class="text-center md:text-left">
        <h1 class="text-3xl md:text-4xl font-bold text-[#0B1F5B] leading-snug">
          Payment successful,<br>
          please enjoy Liturtara services
        </h1>

        <button
          class="mt-8 inline-flex items-center gap-2 bg-[#0B1F5B] text-white px-6 py-3 rounded-lg hover:bg-[#081947] transition"
        >
          ← Back
        </button>
      </div>

    </div>
  </div>

@include('layout.contact')
@include('layout.footer')
@endsection
