@extends('layout.default')
@section('title', 'Upload File')
@section('content')
@include('layout.navbar_after')

<body class="bg-white font-sans text-gray-800">

  <!-- Hero Section -->
  <section class="w-full mt-10">
    <div class="max-w-7xl mx-auto px-4 md:px-20">
      <div class="relative w-full rounded-2xl overflow-hidden shadow-lg">
        <!-- Gambar -->
        <img img src="barista.png" alt="Case Owner Service" class="w-full h-48 md:h-80 object-cover object-top" />
        <!-- Teks di atas gradasi -->
        <div class="absolute bottom-6 left-4 md:bottom-20 md:left-10">
          <h1 class="text-3xl font-bold text-blue-900 mb-2">Case Owner Service</h1>
          <p class="text-sm text-gray-700 max-w-md">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tabs -->
  <main class="bg-white relative z-10 -mt-10 pt-5 shadow-lg">
    <div class="border-b border-gray-200">
      <div class="max-w-6xl mx-auto px-6 md:px-10">
        <nav class="flex space-x-4 md:space-x-8 py-3">
          <a href="#" class="relative pb-2 text-xs sm:text-sm md:text-base font-semibold text-blue-900">
            Case Owner
            <span class="absolute left-0 -bottom-0.5 w-full h-1 bg-blue-900 rounded"></span>
          </a>
        </nav>
      </div>
    </div>
  </main>

  <div class="flex w-full h-screen">

    
    <div class="w-full md:w-1/2 h-full">
      <img src="sekertaris.png" class="w-full h-[950px] object-cover object-[center_-120px]" />
    </div>

  
    <div class="w-full md:w-1/2 flex flex-col justify-center p-4 md:p-12">
      <h2 class="text-3xl font-bold mb-8">Case Upload Form</h2>

      <div class="mb-4">
        <label class="block font-semibold mb-1">Name</label>
        <input type="text" placeholder="Full name"
          class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" />
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-1">Phone Number</label>
        <input type="text" placeholder="Example: 08xxxxxxxx"
          class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" />
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-1">Email</label>
        <input type="email" placeholder="name@example.com"
          class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" />
      </div>

      <div class="mb-6">
        <label class="block font-semibold mb-1">Company Name</label>
        <input type="text" placeholder="Example: UD. Maju Jaya"
          class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" />
      </div>

      <button
        class="mt-6 w-fit px-6 py-2 bg-blue-900 text-white rounded-lg font-medium hover:bg-blue-800 transition flex items-center justify-center gap-2"><a href="{{ route('caseowner.form2') }}">Next</a>
        <svg class="w-6 h-6 translate-y-[1px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
          height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M19 12H5m14 0-4 4m4-4-4-4" />
        </svg>
      </button>
    </div>

  </div>

  </div>
  </section>
</body>
@include('layout.contact')
@include('layout.footer')
@endsection
