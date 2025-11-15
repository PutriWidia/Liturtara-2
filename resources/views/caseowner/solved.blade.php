@extends('layout.default')
@section('title', 'Case Solved')
@section('content')
@include('layout.navbar')

<!-- Hero Section -->
<section class="w-full mt-10">
    <div class="max-w-7xl mx-auto px-20">
      <div class="relative w-full rounded-2xl overflow-hidden shadow-lg">
        <!-- Gambar -->
        <img src="{{ asset('image/barista.png') }}"
          alt="gambar barista"
          class="w-full h-80 object-cover object-top"/>
        <!-- Teks di atas gradasi -->
        <div class="absolute bottom-20 left-10">
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
        <nav class="flex space-x-8 py-3">
          <a href="#" class="relative pb-2 text-sm font-semibold text-blue-900">
            Case Owner
            <span class="absolute left-0 -bottom-0.5 w-full h-1 bg-blue-900 rounded"></span>
          </a>
        </nav>
      </div>
    </div>
  </main>

  <!-- Upload Case Section Full Background -->
  <section class="relative py-20">
    <!-- Background full screen -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
      <img src="{{ asset('image/Case Owner Back.png') }}" alt="gambar hiasan" class="w-full h-auto">
    </div>

    <div class="max-w-7xl mx-auto px-60">
  <div class="bg-green-400 rounded-xl p-8 flex flex-col md:flex-row items-center justify-between shadow-lg relative z-10">
    <div>
      <h3 class="text-2xl font-bold text-white">
        Upload your case problem,<br>we will provide a solution
      </h3>
      <div class="mt-6 flex gap-4">
        <button class="border border-white text-white px-4 py-2 rounded-md hover:bg-green-500 hover:text-white transition">
          Download Template
        </button>
        <button class="bg-blue-900 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition">
          Upload Case
        </button>
      </div>
    </div>

    <div class="w-[150px] rounded-md">
      <img src="{{ asset('image/document.png') }}" alt="document illustration" class="w-full h-auto">
    </div>
  </div>
</div>
</section>

<section class="max-w-7xl mx-auto px-8 py-10 flex flex-col md:flex-row gap-8">
  <div class="w-full md:w-1/4">
    <div class="bg-white shadow-md rounded-xl overflow-hidden font-semibold">
      <ul>
        <li class="group px-6 py-3 text-blue-900 hover:bg-blue-900 hover:text-white flex items-center gap-2 cursor-pointer transition-colors">
          <svg class="w-5 h-5 text-blue-900 group-hover:text-white transition" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linejoin="round" d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/>
           </svg>  
             Case Sent
        </li>
        <li class="group px-6 py-3 text-blue-900 hover:bg-blue-900 hover:text-white flex items-center gap-2 cursor-pointer transition-colors">
          <svg class="w-5 h-5 text-blue-900 group-hover:text-white transition" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linejoin="round" d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/>
           </svg>  
             Case Approved
        </li>
        <li class="group px-6 py-3 text-blue-900 hover:bg-blue-900 hover:text-white flex items-center gap-2 cursor-pointer transition-colors">
          <svg class="w-5 h-5 text-blue-900 group-hover:text-white transition" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linejoin="round" d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/>
           </svg>  
             Case In Progress
        </li>
        <li class="group px-6 py-3 text-blue-900 hover:bg-blue-900 hover:text-white flex items-center gap-2 cursor-pointer transition-colors">
          <svg class="w-5 h-5 text-blue-900 group-hover:text-white transition" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linejoin="round" d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/>
           </svg>  
             Case Review
        </li>
        <li class="group px-6 py-3 text-blue-900 bg-blue-900 text-white flex items-center gap-2 cursor-pointer transition-colors">
          <svg class="w-5 h-5 text-blue-900 group-hover:text-white transition" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linejoin="round" d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/>
           </svg>  
             Case Solved
        </li>
        <li class="group px-6 py-3 text-blue-900 hover:bg-blue-900 hover:text-white flex items-center gap-2 cursor-pointer transition-colors">
          <svg class="w-5 h-5 text-blue-900 group-hover:text-white transition" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linejoin="round" d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/>
           </svg>  
             Case Rejected
        </li>
      </ul>
    </div>
  </div>

  <!-- Cards Grid -->
  <div class="w-full md:w-3/4 grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Card 1 -->
    <div class="bg-white rounded-2xl shadow-md hover:shadow-lg p-6 transition transform hover:-translate-y-1 border border-gray-100 relative">
      <span class="absolute top-0 right-0 bg-green-500 text-white text-sm px-3 py-2 rounded-bl-lg rounded-tr-lg">Complete</span>
      <h3 class="text-black text-xl font-semibold mb-2">Lorem ipsum dolor sit amet Lorem</h3>

      <div class="flex flex-wrap gap-2 mb-4">
        <span class="border border-blue-900 text-blue-900 text-sm px-2 py-1 rounded-lg">Category</span>
        <span class="border border-blue-900 text-blue-900 text-sm px-2 py-1 rounded-lg">Category</span>
      </div>
      

      <div class="flex items-center text-black text-sm mb-4 font-bold">
        <div class="flex items-center gap-1 mr-6">
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
          </svg>
          John Doe
        </div>
        <div class="flex items-center gap-1">
          <svg class="w-6 h-6 text-black dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
          </svg>
          2 Oktober 2024
        </div>
      </div>

      <p class="text-gray-500 text-sm mb-6">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
      </p>

      <div class="flex items-center justify-between">
        <span class="bg-gray-200 text-black text-sm px-3 py-2 rounded-lg flex items-center gap-2 font-medium">
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
          </svg>
          15 Des 2024
        </span>
        

        <div class="flex items-center gap-2">
          <button class="border border-green-500 text-green-500 hover:bg-green-500 hover:text-white hover:border-white px-4 py-1.5 rounded-lg flex items-center gap-2 transition-colors">Download
            <svg class="w-5 h-5 text-green-500 hover:text-white transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4" />
            </svg>
         </button>
         <button class="bg-blue-900 text-white px-3 py-1.5 rounded-lg hover:bg-blue-800 transition">View →</button>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-2xl shadow-md hover:shadow-lg p-6 transition transform hover:-translate-y-1 border border-gray-100 relative">
      <span class="absolute top-0 right-0 bg-green-500 text-white text-sm px-3 py-2 rounded-bl-lg rounded-tr-lg">Complete</span>
      <h3 class="text-black text-xl font-semibold mb-2">Lorem ipsum dolor sit amet Lorem</h3>

      <div class="flex flex-wrap gap-2 mb-4">
        <span class="border border-blue-900 text-blue-900 text-sm px-2 py-1 rounded-lg">Category</span>
        <span class="border border-blue-900 text-blue-900 text-sm px-2 py-1 rounded-lg">Category</span>
      </div>
      

      <div class="flex items-center text-black text-sm mb-4 font-bold">
        <div class="flex items-center gap-1 mr-6">
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
          </svg>
          John Doe
        </div>
        <div class="flex items-center gap-1">
          <svg class="w-6 h-6 text-black dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
          </svg>
          2 Oktober 2024
        </div>
      </div>

      <p class="text-gray-500 text-sm mb-6">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
      </p>

      <div class="flex items-center justify-between">
        <span class="bg-gray-200 text-black text-sm px-3 py-2 rounded-lg flex items-center gap-2 font-medium">
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
          </svg>
          15 Des 2024
        </span>
        

        <div class="flex items-center gap-2">
          <button class="border border-green-500 text-green-500 hover:bg-green-500 hover:text-white hover:border-white px-4 py-1.5 rounded-lg flex items-center gap-2 transition-colors">Download
            <svg class="w-5 h-5 text-green-500 hover:text-white transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4" />
            </svg>
         </button>
         <button class="bg-blue-900 text-white px-3 py-1.5 rounded-lg hover:bg-blue-800 transition">View →</button>
        </div>
      </div>
    </div>
</section>

@include('layout.contact')
@include('layout.footer')
@endsection