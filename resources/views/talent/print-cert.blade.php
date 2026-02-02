@extends('layout.default')
@section('title', 'Print Cert')
@section('content')
@include('layout.navbar_after')

<body class="bg-gray-50">

  <div class="max-w-6xl mx-auto px-6 py-8">

    <!-- Title -->
    <h1 class="text-2xl font-bold text-center text-[#0C295F] mb-6">
      Print Certificate
    </h1>

    <!-- Search -->
<div class="flex justify-center mb-6">
  <div class="relative flex w-full max-w-xl">

    <!-- Input -->
    <input
      type="text"
      placeholder="Search your case..."
      class="w-full px-4 py-2 pr-10 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-1 focus:ring-[#0C295F]"
      id="searchInput"
    />

    <!-- Clear Button (Silang) -->
    <button
      type="button"
      onclick="document.getElementById('searchInput').value=''"
      class="absolute right-[90px] top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600"
    >
      ✕
    </button>

    <!-- Search Button -->
    <button class="px-5 py-2 bg-[#0C295F] text-white rounded-r-lg">
      Search
    </button>

  </div>
</div>


    <!-- Back -->
    <a href="#" class="text-sm font-bold text-[#0C295F] mb-4 inline-block">
      ← Back
    </a>

    <hr class="mb-4">

    <!-- Header -->
    <div class="grid grid-cols-12 font-semibold text-sm text-gray-500 px-4 mb-2">
      <div class="col-span-5">Title</div>
      <div class="col-span-3">Date</div>
      <div class="col-span-2">Status</div>
      <div class="col-span-2 text-right">Action</div>
    </div>

    <!-- List Item -->
    <div class="space-y-4">

      <!-- Item -->
      <div class="grid grid-cols-12 items-center bg-white rounded-xl shadow-sm px-4 py-4">
        <div class="col-span-5">
          <p class="font-medium text-[#0C295F]">
            Sed do eiusmod tempor incididunt
          </p>
          <p class="text-sm text-gray-500">
            Muhammad Patel
          </p>
        </div>

        <div class="col-span-3 text-sm text-gray-700">
          06 December 2025
        </div>

        <div class="col-span-2">
          <span class="text-sm font-bold text-gray-700">
            Completed
          </span>
        </div>

        <div class="col-span-2 flex justify-end gap-2">
          <button class="font-semibold px-4 py-1 border border-gray-400 rounded-md text-sm">
            Detail
          </button>
          <button class="font-semibold px-4 py-1 bg-[#0C295F] text-white rounded-md text-sm">
            Print
          </button>
        </div>
      </div>

      <!-- Duplicate item (copy sesuai kebutuhan) -->
      <div class="grid grid-cols-12 items-center bg-white rounded-xl shadow-sm px-4 py-4">
        <div class="col-span-5">
          <p class="font-medium text-[#0C295F]">
            Sed do eiusmod tempor incididunt
          </p>
          <p class="text-sm text-gray-500">
            Muhammad Patel
          </p>
        </div>

        <div class="col-span-3 text-sm text-gray-700">
          06 December 2025
        </div>

        <div class="col-span-2">
          <span class="text-sm font-bold text-gray-700">
            Completed
          </span>
        </div>

        <div class="col-span-2 flex justify-end gap-2">
          <button class="font-semibold px-4 py-1 border border-gray-400 rounded-md text-sm">
            Detail
          </button>
          <button class="font-semibold px-4 py-1 bg-[#0C295F] text-white rounded-md text-sm">
            Print
          </button>
        </div>
      </div>

    </div>

    <!-- Pagination -->
    <div class="flex justify-between items-center mt-8">

      <div class="flex gap-2">
        <button class="px-3 py-2 border rounded-md">
          ←
        </button>
        <button class="px-4 py-2 bg-[#0C295F] text-white rounded-md">
          Next →
        </button>
      </div>

      <div class="text-sm text-gray-600">
        Page
        <input type="text" value="1"
          class="w-10 text-center border rounded-md mx-1 py-1">
        from 2
      </div>

    </div>

  </div>

</body>

@include('layout.contact')
@include('layout.footer')
@endsection

