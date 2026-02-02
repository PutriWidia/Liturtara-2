@extends('layout.default')
@section('title', 'Docs College')
@section('content')
@include('layout.navbar')

  <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-12">

      <!-- ================= LEFT IMAGE ================= -->
      <div class="flex justify-center">
        <!-- WRAPPER (CENTER POINT) -->
        <div class="relative w-[550px] h-[500px] flex items-center justify-center">

          <!-- OUTER BLUE -->
          <div class="absolute inset-0 m-auto w-[440px] h-[440px] rounded-full border-[10px] border-[#0B1F5B]"></div>

          <!-- MIDDLE GREEN -->
          <div class="absolute inset-0 m-auto w-[380px] h-[380px] rounded-full border-[10px] border-[#38B24A]"></div>

          <!-- INNER BLUE -->
          <div class="absolute inset-0 m-auto w-[320px] h-[320px] rounded-full border-[10px] border-[#0B1F5B]"></div>

          <!-- IMAGE -->
<img
  src="women3.png"
  alt="Success"
  class="relative z-10 w-full max-w-[550px] object-contain"
/>

        </div>
      </div>


<!-- ================= RIGHT CONTENT ================= -->
<div class="text-center lg:text-left">

  <h1 class="text-3xl lg:text-4xl max-w-lg font-bold text-[#0B1F5B] mb-4">
    Thank you for the solution you provided
  </h1>

  <p class="text-gray-600 text-lg mb-8 max-w-sm mx-auto lg:mx-0">
    You are currently waiting for the solution to be reviewed by the Case Owner
  </p>

<!-- CARD (benar-benar nempel kanan) -->
<div class="w-full flex justify-end -mr-4 lg:-mr-8">
  <div class="bg-white shadow-lg rounded-2xl p-4 w-[300px]">
    <h3 class="text-base font-bold text-black mb-2">
      Thank you for choosing<br />our service
    </h3>

    <p class="text-black-600 text-sm mb-5 leading-relaxed">
      We hope that with our service, you would be
      happy to complete our service survey
    </p>

    <button
      class="inline-flex items-center gap-2 bg-[#0B1F5B] text-white px-5 py-2.5 rounded-lg hover:bg-[#081947] transition">
      Isi Survey
      <span class="text-xl">→</span>
    </button>
  </div>
</div>
</div>


</div>


    </div>
  </div>

@include('layout.contact')
@include('layout.footer')
@endsection