@extends('layout.default')
@section('title', 'Top Up')
@section('content')
@include('layout.navbar_after')

  <div class="max-w-6xl mx-auto w-full px-6 text-center">

    <!-- Logo -->
    <div class="flex justify-center mb-6">
      <img src="logo.png" class="w-14 h-14 object-contain" />
    </div>

    <!-- Title -->
    <h1 class="text-3xl md:text-4xl font-bold text-[#0B1F5B]">
      Select the number of tokens that<br class="hidden md:block">
      suits your needs.
    </h1>

    <p class="mt-4 max-w-2xl mx-auto text-sm text-gray-500">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    </p>

    <!-- Cards -->
    <div
      x-data="{ selected: 10 }"
      class="mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6"
    >

      <!-- CARD TEMPLATE -->
      <!-- Card 5 -->
      <div
        @click="selected = 5"
        :class="selected === 5
          ? 'bg-gradient-to-br from-[#38B24A] to-[#2563EB] p-[2px]'
          : 'bg-transparent p-[2px]'"
        class="rounded-2xl cursor-pointer transition"
      >
        <div
          class="bg-white rounded-2xl py-8 px-4 transition hover:-translate-y-1"
        >
          <div class="flex justify-center mb-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-[#DFF5EA] to-[#E3ECFF] flex items-center justify-center">
              <img src="logo.png" class="w-7 h-7" />
            </div>
          </div>
          <h2 class="text-2xl font-bold text-[#0B1F5B]">5</h2>
          <p class="mt-4 font-medium text-[#0B1F5B]">Rp 12.500</p>
        </div>
      </div>

      <!-- Card 10 -->
      <div
        @click="selected = 10"
        :class="selected === 10
          ? 'bg-gradient-to-br from-[#38B24A] to-[#2563EB] p-[2px]'
          : 'bg-transparent p-[2px]'"
        class="rounded-2xl cursor-pointer transition"
      >
        <div class="bg-white rounded-2xl py-8 px-4 transition hover:-translate-y-1">
          <div class="flex justify-center mb-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-[#DFF5EA] to-[#E3ECFF] flex items-center justify-center">
              <img src="logo.png" class="w-7 h-7" />
            </div>
          </div>
          <h2 class="text-2xl font-bold text-[#0B1F5B]">10</h2>
          <p class="mt-4 font-medium text-[#0B1F5B]">Rp 25.000</p>
        </div>
      </div>

      <!-- Card 20 -->
      <div
        @click="selected = 20"
        :class="selected === 20
          ? 'bg-gradient-to-br from-[#38B24A] to-[#2563EB] p-[2px]'
          : 'bg-transparent p-[2px]'"
        class="rounded-2xl cursor-pointer transition"
      >
        <div class="bg-white rounded-2xl py-8 px-4 transition hover:-translate-y-1">
          <div class="flex justify-center mb-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-[#DFF5EA] to-[#E3ECFF] flex items-center justify-center">
              <img src="logo.png" class="w-7 h-7" />
            </div>
          </div>
          <h2 class="text-2xl font-bold text-[#0B1F5B]">20</h2>
          <p class="mt-4 font-medium text-[#0B1F5B]">Rp 50.000</p>
        </div>
      </div>

      <!-- Card 50 -->
      <div
        @click="selected = 50"
        :class="selected === 50
          ? 'bg-gradient-to-br from-[#38B24A] to-[#2563EB] p-[2px]'
          : 'bg-transparent p-[2px]'"
        class="rounded-2xl cursor-pointer transition"
      >
        <div class="bg-white rounded-2xl py-8 px-4 transition hover:-translate-y-1">
          <div class="flex justify-center mb-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-[#DFF5EA] to-[#E3ECFF] flex items-center justify-center">
              <img src="logo.png" class="w-7 h-7" />
            </div>
          </div>
          <h2 class="text-2xl font-bold text-[#0B1F5B]">50</h2>
          <p class="mt-4 font-medium text-[#0B1F5B]">Rp 125.000</p>
        </div>
      </div>

    </div>

    <!-- Button -->
    <div class="mt-14">
      <button class="bg-[#0B1F5B] text-white px-16 py-4 rounded-xl font-medium hover:bg-[#081947] transition">
        Purchase
      </button>
    </div>

  </div>

@include('layout.contact')
@include('layout.footer')
@endsection