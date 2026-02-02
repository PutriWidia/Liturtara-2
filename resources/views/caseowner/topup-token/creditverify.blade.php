@extends('layout.default')
@section('title', 'Top Up Token')
@section('content')
@include('layout.navbar_after')

<section class="w-full min-h-screen flex items-center justify-center bg-gradient-to-r from-[#EFF4FF] to-[#E8FFE9] px-6">
  <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

    <!-- Left Image -->
    <div class="flex justify-center">
      <div class="relative">
        <img src="makasih.png" alt="illustration" class="w-64 sm:w-80 md:w-[465px] object-contain" />

        <!-- Background circle decoration -->
        <div class="absolute inset-0 -z-10 flex items-center justify-center">
          <div
            class="w-[300px] h-[300px] md:w-[360px] md:h-[360px] rounded-full border-[10px] border-[#1B4DF0] opacity-20">
          </div>
        </div>
      </div>
    </div>

    <!-- Right Content -->
    <div class="flex flex-col justify-center text-center md:text-left">
      <h1 class="text-3xl md:text-4xl font-bold text-blue-900 leading-snug">
        Payment successful, <br />
        please enjoy Liturtara <br />
        services
      </h1>

      <button class="mt-6 w-fit px-6 py-2 rounded-lg bg-blue-900 text-white font-medium flex items-center gap-2 transition self-center md:self-start">
        <svg class="w-6 h-6 translate-y-[1px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4" />
        </svg>
        <span class="text-lg leading-[0]">Back</span>
      </button>
    </div>
  </div>
</section>
include('layout.footer')
@endsection