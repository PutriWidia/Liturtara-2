@extends('layout.default')
@section('title', 'Thank You Docs')
@section('content')
@include('layout.navbar_after')

  <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-12">

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
            src="woman2.png"
            alt="Success"
            class="relative z-10 w-[500px] object-contain"
          />
        </div>
      </div>


      <!-- ================= RIGHT CONTENT ================= -->
      <div class="text-center lg:text-left">

        <h1 class="text-3xl lg:text-4xl font-bold text-[#0B1F5B] mb-4">
          Thank you for taking the file!
        </h1>

        <p class="text-gray-600 text-lg mb-8 max-w-xl mx-auto lg:mx-0">
          You are currently waiting for approval from the Case Owner.
        </p>

        <button
          class="inline-flex items-center gap-2
                 bg-[#0B1F5B] text-white
                 px-6 py-3 rounded-lg
                 hover:bg-[#081947] transition"
        >
          Lihat
          <span class="text-xl">→</span>
        </button>

      </div>

    </div>
  </div>

@include('layout.contact')
@include('layout.footer')
@endsection

