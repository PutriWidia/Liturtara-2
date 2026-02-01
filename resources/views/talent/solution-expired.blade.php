@extends('layout.default')
@section('title', 'Solution Expired')
@section('content')
@include('layout.navbar')

<!-- Hero Section -->
<section class="relative">
  <div class="max-w-7xl mx-auto px-10">
    <div class="relative rounded-2xl overflow-hidden shadow">
      <img src="gambar1.png" alt=" " class="w-full h-72 object-cover">
      <!-- Hapus gradasi hitam -->
      <div class="absolute inset-0 flex flex-col justify-end items-start pb-14 px-16">
        <h1 class="text-3xl font-bold text-[#0C295F]">Talent Researcher Service</h1>
        <p class="text-sm mt-2 text-[#0C295F] opacity-80">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
  </div>
</section>

<!-- Tabs -->
<div class="bg-white shadow-sm mt-2 rounded-b-2xl">
  <div class="max-w-7xl mx-auto px-8 py-3 flex space-x-8 text-sm font-medium">
    <button class="font-semibold border-b-2 border-[#0C295F] pb-1">Case List</button>
    <button class="font-semibold hover:text-[#0C295F]">Solution Status</button>
  </div>
</div>

<!-- Search Section -->
<section 
  class="relative flex flex-col items-center justify-center h-[400px] text-center bg-cover bg-center overflow-hidden"
  style="background-image: url('background.png');">

  <div class="relative z-10 w-full max-w-3xl">
    <h2 class="text-3xl md:text-4xl font-bold text-[#0C295F] mb-10 drop-shadow-md">
      Find your case
    </h2>

    <div class="flex items-center justify-center gap-3 w-[90%] max-w-2xl mx-auto">
      <div class="relative w-full">
        <!-- Border abu selalu muncul -->
        <input 
          id="searchInput"
          type="text" 
          placeholder="Search your case..." 
          class="w-full px-5 py-3 rounded-xl border border-gray-400 text-gray-700 placeholder-gray-400 focus:ring-2 focus:ring-[#0C295F] focus:border-[#0C295F] focus:outline-none shadow-sm bg-white/90 transition"
        />
        <button 
          id="clearButton" 
          class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 hidden">
          ✕
        </button>
      </div>

      <button 
        class="flex items-center gap-2 bg-[#0C295F] text-white px-6 py-3 rounded-xl hover:bg-[#173475] transition shadow-md">
        <!-- inline magnifying icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
        </svg>
        <span>Search</span>
      </button>
    </div>
  </div>
</section>

<script>
  const input = document.getElementById('searchInput');
  const clearButton = document.getElementById('clearButton');

  input.addEventListener('input', () => {
    clearButton.classList.toggle('hidden', input.value === '');
  });

  clearButton.addEventListener('click', () => {
    input.value = '';
    clearButton.classList.add('hidden');
    input.focus();
  });
</script>

<!-- Main Section -->
<main class="max-w-7xl mx-auto px-6 py-10 flex flex-col lg:flex-row gap-6">

  <!-- Left Column -->
  <div class="flex-1 space-y-6">

    <!-- === CARD 1 === -->
<article class="relative bg-white p-6 rounded-2xl shadow-md hover:shadow-lg transition">
  <span class="absolute top-0 right-0 bg-[#0C295F] text-white text-sm font-medium px-5 py-2 
        rounded-bl-2xl rounded-tr-2xl">
    Available
  </span>

  <h3 class="font-extrabold text-2xl text-[#0C295F] mb-3">Lorem ipsum dolor sit amet Lorem</h3>

  <div class="flex gap-2 mb-3">
    <span class=" font-semibold text-[13px] text-[#0C295F] border border-[#0C295F] rounded-full px-3 py-1">Category</span>
    <span class=" font-semibold text-[13px] text-[#0C295F] border border-[#0C295F] rounded-full px-3 py-1">Category</span>
  </div>

  <div class="flex items-center gap-6 text-sm text-gray-600 mb-4">
    
    <!-- User -->
    <div class="flex items-center gap-2">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
        <path d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5z" stroke="#0C295F" stroke-width="1.2"/>
        <path d="M20 21v-1c0-2.761-3.134-5-8-5s-8 2.239-8 5v1" stroke="#0C295F" stroke-width="1.2"/>
      </svg>
      <span class="font-bold text-black">John Doe</span>
    </div>

    <!-- Uploaded date + Tooltip -->
    <div class="flex items-center gap-2 relative group">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
        <rect x="3" y="5" width="18" height="16" rx="2" stroke="#0C295F" stroke-width="1.2"/>
        <path d="M16 3v4M8 3v4" stroke="#0C295F" stroke-width="1.2" stroke-linecap="round"/>
      </svg>

      <div class="flex items-center gap-1">
        <span class="text-[11px] text-blue-500 font-medium">Uploaded on •</span>
        <span class="font-bold text-black">2 Oktober 2024</span>
      </div>

      <!-- Tooltip -->
      <div class="absolute top-7 left-1/2 -translate-x-1/2 bg-[#0C295F] text-white text-xs px-3 py-2 rounded-md opacity-0 group-hover:opacity-100 transition duration-300 pointer-events-none shadow-lg">
        Tanggal saat user meng-upload data ini.
      </div>
    </div>

  </div>

  <!-- Description -->
  <p class="text-sm text-[#475569] mb-6">
    Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.
  </p>

  <div class="flex justify-between items-start">
    <div class="flex-1"></div>

    <div class="flex flex-col items-end gap-3 -mt-5">

      <div class="flex items-center gap-4">
        <div class="w-10 h-10 flex items-center justify-center">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0C295F" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 1.5l2 1.6 2.6-.3 1.1 2.4 2.4 1.1-.3 2.6 1.6 2-1.6 2 .3 2.6-2.4 1.1-1.1 2.4-2.6-.3-2 1.6-2-1.6-2.6.3-1.1-2.4-2.4-1.1.3-2.6-1.6-2 1.6-2-.3-2.6 2.4-1.1 1.1-2.4 2.6.3 2-1.6z"/>
            <path d="M16 10l-4 4-2-2"/>
          </svg>
        </div>

        <div class="flex items-center gap-1 text-yellow-400">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#CBD5E1" stroke-width="1.5"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
        </div>

        <div class="text-sm text-[#475569]">Jawa Barat</div>
      </div>

      <!-- Expired Section With Tooltip -->
      <div class="flex items-center gap-3 relative group">

        <span class="text-[10px] text-red-500 font-medium">Expired on:</span>

        <div class="text-xs bg-red-100 text-red-600 px-3 py-2 rounded-full font-semibold">
          15 Des 2024
        </div>

        <!-- Tooltip -->
        <div class="absolute top-8 right-2 bg-red-600 text-white text-xs px-3 py-2 rounded-md opacity-0 group-hover:opacity-100 transition duration-300 pointer-events-none shadow-lg">
          Tanggal ini adalah batas akhir item ini valid.
        </div>

        <button class="text-red-500 border border-red-300 rounded-md px-4 py-2 text-sm font-semibold hover:bg-red-50">Report</button>
        <button class="bg-[#0C295F] text-white rounded-md px-4 py-2 text-sm font-semibold hover:bg-[#0b2243]">Detail</button>
      </div>

    </div>
  </div>
</article>


    <!-- === CARD 2 === -->
<article class="relative bg-white p-6 rounded-2xl shadow-md hover:shadow-lg transition">
  <span class="absolute top-0 right-0 bg-green-500 text-white text-sm font-medium px-5 py-2 
        rounded-bl-2xl rounded-tr-2xl">
    Completed
  </span>

  <h3 class="font-extrabold text-2xl text-[#0C295F] mb-3">Lorem ipsum dolor sit amet Lorem</h3>

  <div class="flex gap-2 mb-3">
    <span class=" font-semibold text-[13px] text-[#0C295F] border border-[#0C295F] rounded-full px-3 py-1">Category</span>
    <span class=" font-semibold text-[13px] text-[#0C295F] border border-[#0C295F] rounded-full px-3 py-1">Category</span>
  </div>

  <div class="flex items-center gap-6 text-sm text-gray-600 mb-4">

    <!-- User -->
    <div class="flex items-center gap-2">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
        <path d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5z" stroke="#0C295F" stroke-width="1.2"/>
        <path d="M20 21v-1c0-2.761-3.134-5-8-5s-8 2.239-8 5v1" stroke="#0C295F" stroke-width="1.2"/>
      </svg>
      <span class="font-bold text-black">John Doe</span>
    </div>

    <!-- Uploaded On + Tooltip -->
    <div class="flex items-center gap-2 relative group">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
        <rect x="3" y="5" width="18" height="16" rx="2" stroke="#0C295F" stroke-width="1.2"/>
        <path d="M16 3v4M8 3v4" stroke="#0C295F" stroke-width="1.2" stroke-linecap="round"/>
      </svg>

      <div class="flex items-center gap-1">
        <span class="text-[11px] text-blue-500 font-medium">Uploaded on •</span>
        <span class="font-bold text-black">2 Oktober 2024</span>
      </div>

      <!-- Tooltip -->
      <div class="absolute top-7 left-1/2 -translate-x-1/2 bg-[#0C295F] text-white text-xs px-3 py-2 rounded-md opacity-0 group-hover:opacity-100 transition duration-300 pointer-events-none shadow-lg">
        Tanggal saat data ini di-upload.
      </div>
    </div>

  </div>

  <p class="text-sm text-[#475569] mb-6">
    Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.
  </p>

  <div class="flex justify-between items-start">
    <div class="flex-1"></div>

    <div class="flex flex-col items-end gap-3 -mt-5">

      <div class="flex items-center gap-4">
        <div class="w-10 h-10 flex items-center justify-center">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0C295F" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 1.5l2 1.6 2.6-.3 1.1 2.4 2.4 1.1-.3 2.6 1.6 2-1.6 2 .3 2.6-2.4 1.1-1.1 2.4-2.6-.3-2 1.6-2-1.6-2.6.3-1.1-2.4-2.4-1.1.3-2.6-1.6-2 1.6-2-.3-2.6 2.4-1.1 1.1-2.4 2.6.3 2-1.6z"/>
            <path d="M16 10l-4 4-2-2"/>
          </svg>
        </div>

        <div class="flex items-center gap-1 text-yellow-400">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#CBD5E1" stroke-width="1.5"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
        </div>

        <div class="text-sm text-[#475569]">Jawa Barat</div>
      </div>

      <!-- Expired Badge + Tooltip -->
      <div class="flex items-center gap-3 relative group">

        <span class="text-[11px] text-red-500 font-medium">Expired on •</span>

        <div class="text-xs bg-red-100 text-red-600 px-3 py-2 rounded-full font-semibold">
          15 Des 2024
        </div>

        <!-- Tooltip -->
        <div class="absolute top-8 right-1 bg-red-600 text-white text-xs px-3 py-2 rounded-md opacity-0 group-hover:opacity-100 transition duration-300 pointer-events-none shadow-lg">
          Tanggal batas akhir item ini valid.
        </div>

        <button class="text-red-500 border border-red-300 rounded-md px-4 py-2 text-sm font-semibold hover:bg-red-50">Report</button>
        <button class="bg-[#0C295F] text-white rounded-md px-4 py-2 text-sm font-semibold hover:bg-[#0b2243]">Detail</button>
      </div>

    </div>
  </div>
</article>


    <!-- === CARD 3 === -->
<article class="relative bg-white p-6 rounded-2xl shadow-md hover:shadow-lg transition">
  <span class="absolute top-0 right-0 bg-green-500 text-white text-sm font-medium px-5 py-2 
        rounded-bl-2xl rounded-tr-2xl">
    Completed
  </span>

  <h3 class="font-extrabold text-2xl text-[#0C295F] mb-3">Lorem ipsum dolor sit amet Lorem</h3>

  <div class="flex gap-2 mb-3">
    <span class=" font-semibold text-[13px] text-[#0C295F] border border-[#0C295F] rounded-full px-3 py-1">Category</span>
    <span class=" font-semibold text-[13px] text-[#0C295F] border border-[#0C295F] rounded-full px-3 py-1">Category</span>
  </div>

  <div class="flex items-center gap-6 text-sm text-gray-600 mb-4">

    <!-- User -->
    <div class="flex items-center gap-2">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
        <path d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5z" stroke="#0C295F" stroke-width="1.2"/>
        <path d="M20 21v-1c0-2.761-3.134-5-8-5s-8 2.239-8 5v1" stroke="#0C295F" stroke-width="1.2"/>
      </svg>
      <span class="font-bold text-black">John Doe</span>
    </div>

    <!-- Uploaded On + Tooltip -->
    <div class="flex items-center gap-2 relative group">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
        <rect x="3" y="5" width="18" height="16" rx="2" stroke="#0C295F" stroke-width="1.2"/>
        <path d="M16 3v4M8 3v4" stroke="#0C295F" stroke-width="1.2" stroke-linecap="round"/>
      </svg>

      <div class="flex items-center gap-1">
        <span class="text-[11px] text-blue-500 font-medium">Uploaded on •</span>
        <span class="font-bold text-black">2 Oktober 2024</span>
      </div>

      <!-- Tooltip -->
      <div class="absolute top-7 left-1/2 -translate-x-1/2 bg-[#0C295F] text-white text-xs px-3 py-2 rounded-md opacity-0 group-hover:opacity-100 transition duration-300 pointer-events-none shadow-lg">
        Tanggal saat data ini di-upload.
      </div>
    </div>

  </div>

  <p class="text-sm text-[#475569] mb-6">
    Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.
  </p>

  <div class="flex justify-between items-start">
    <div class="flex-1"></div>

    <div class="flex flex-col items-end gap-3 -mt-5">

      <div class="flex items-center gap-4">
        <div class="w-10 h-10 flex items-center justify-center">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0C295F" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 1.5l2 1.6 2.6-.3 1.1 2.4 2.4 1.1-.3 2.6 1.6 2-1.6 2 .3 2.6-2.4 1.1-1.1 2.4-2.6-.3-2 1.6-2-1.6-2.6.3-1.1-2.4-2.4-1.1.3-2.6-1.6-2 1.6-2-.3-2.6 2.4-1.1 1.1-2.4 2.6.3 2-1.6z"/>
            <path d="M16 10l-4 4-2-2"/>
          </svg>
        </div>

        <div class="flex items-center gap-1 text-yellow-400">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#CBD5E1" stroke-width="1.5"><path d="M12 .587l3.668 7.431L23.4 9.748l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.633-8.696L.6 9.748l7.732-1.73L12 .587z"/></svg>
        </div>

        <div class="text-sm text-[#475569]">Jawa Barat</div>
      </div>

      <!-- Expired Badge + Tooltip -->
      <div class="flex items-center gap-3 relative group">

        <span class="text-[11px] text-red-500 font-medium">Expired on •</span>

        <div class="text-xs bg-red-100 text-red-600 px-3 py-2 rounded-full font-semibold">
          15 Des 2024
        </div>

        <!-- Tooltip -->
        <div class="absolute top-8 right-1 bg-red-600 text-white text-xs px-3 py-2 rounded-md opacity-0 group-hover:opacity-100 transition duration-300 pointer-events-none shadow-lg">
          Tanggal batas akhir item ini valid.
        </div>

        <button class="text-red-500 border border-red-300 rounded-md px-4 py-2 text-sm font-semibold hover:bg-red-50">Report</button>
        <button class="bg-[#0C295F] text-white rounded-md px-4 py-2 text-sm font-semibold hover:bg-[#0b2243]">Detail</button>
      </div>

    </div>
  </div>
</article>


  </div>

<!-- Right Column -->
<aside class="w-full lg:w-80 bg-white p-6 rounded-2xl shadow-md h-fit">
  <h3 class="text-[#0C295F] font-semibold mb-4 flex items-center gap-2 text-lg">
    <span class="font-bold">≡</span> Filter
  </h3>

  <div class="space-y-6">

    <!-- Category -->
    <div>
      <p class="text-sm font-bold text-gray-700 mb-2">Category</p>
      <div class="flex flex-wrap gap-3">
        <span class="px-4 py-2 text-xs border border-gray-300 rounded-lg text-gray-600">Category</span>
        <span class="px-4 py-2 text-xs border border-gray-300 rounded-lg text-gray-600">Category</span>
        <span class="px-4 py-2 text-xs border border-gray-300 rounded-lg text-gray-600">Category</span>
        <span class="px-4 py-2 text-xs border border-gray-300 rounded-lg text-gray-600">Category</span>
        <span class="px-4 py-2 text-xs border border-gray-300 rounded-lg text-gray-600">Category</span>
        <span class="px-4 py-2 text-xs border border-gray-300 rounded-lg text-gray-600">Category</span>
      </div>
    </div>

    <!-- Upload Time -->
<div>
  <p class="text-sm font-bold text-gray-700 mb-2">Upload Time</p>

  <div class="flex items-center gap-2 w-full overflow-hidden">
    <input 
      type="date" 
      class="flex-1 min-w-0 border border-gray-300 rounded-lg px-3 py-2 text-xs"
    >

    <span class="text-gray-500 text-lg">&lt;&gt;</span>

    <input 
      type="date" 
      class="flex-1 min-w-0 border border-gray-300 rounded-lg px-3 py-2 text-xs"
    >
  </div>
</div>



    <!-- Sort -->
    <div>
      <p class="text-sm font-bold text-gray-700 mb-2">Sort</p>
      <div class="flex flex-col text-sm text-gray-600 gap-2">
        <label class="flex items-center gap-2">
          <input type="radio" name="sort" class="accent-[#0C295F]">
          <span>Earliest file upload time</span>
        </label>
        <label class="flex items-center gap-2">
          <input type="radio" name="sort" class="accent-[#0C295F]">
          <span>Last file upload time</span>
        </label>
      </div>
    </div>

    <!-- Button -->
    <button class="mt-2 w-full bg-[#0C295F] text-white py-3 rounded-xl hover:bg-[#173475] transition text-sm">
      Next
    </button>
  </div>
</aside>


<!-- OVERLAY -->
<div class="fixed inset-0 bg-black bg-opacity-40 backdrop-blur-sm z-40"></div>

<!-- RIGHT PANEL -->
<div class="fixed top-0 right-0 h-full w-full md:w-[45%] bg-white shadow-2xl z-50 overflow-y-auto p-10">

        <!-- Kotak Waiting di kanan atas -->
  <div class="absolute top-0 right-0 bg-red-500 text-white text-sm font-bold px-5 py-2 
        rounded-bl-2xl rounded-tr-2xl">
    Expired
  </div>

  <!-- Header -->
  <h1 class="text-2xl font-bold text-[#0C295F] mb-4">
    Lorem ipsum dolor sit amet Lorem
  </h1>

  <!-- METADATA HEADER -->
  <div class="flex justify-between items-start mb-4">

    <!-- LEFT SIDE -->
    <div>
      <!-- Nama -->
      <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
          <path d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5z" stroke="#0C295F" stroke-width="1.2"/>
          <path d="M20 21v-1c0-2.761-3.134-5-8-5s-8 2.239-8 5v1" stroke="#0C295F" stroke-width="1.2"/>
        </svg>
        <span class="font-semibold text-black">John Doe</span>
      </div>

      <!-- Kategori -->
      <div class="flex items-center gap-2">
        <span class="font-semibold text-[11px] border border-[#0C295F] text-[#0C295F] px-3 py-1 rounded-full">
          Category
        </span>
        <span class="font-semibold text-[11px] border border-[#0C295F] text-[#0C295F] px-3 py-1 rounded-full">
          Category
        </span>
      </div>

      <!-- Posted -->
      <div class="mt-3 text-[14px] text-black font-bold">
        Posted <span class="text-black">02 Oktober 2024</span>
      </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="flex flex-col items-end gap-1">

      <!-- Deadline title -->
      <span class="text-sm text-gray-600 mb-1">Deadline</span>

      <!-- Deadline box -->
      <div class="flex items-center gap-2 bg-gray-300 px-4 py-2 rounded-lg text-sm text-[#0C295F] font-semibold">
        <svg width="16" height="16" viewBox="0 0 24 24" stroke="#0C295F" fill="none">
          <circle cx="12" cy="12" r="10" stroke-width="1.5"/>
          <path d="M12 6v6l4 2" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        15 Des 2024
      </div>

      <!-- Rating -->
      <div class="flex gap-1 text-yellow-400 mt-0 text-2xl">
        ★★★★☆
      </div>
    </div>
  </div>

  <!-- LOCATION + VIEWS -->
  <div class="flex items-center gap-6 text-[13px] text-gray-600 mb-6">
    <span class="text-black font-semibold">Jawa Barat</span>
  </div>


  <!-- Section Title -->
  <h2 class="font-bold text-[#0C295F] text-[16px] mb-2">Abstract</h2>

  <!-- Content -->
  <p class="text-gray-700 leading-relaxed mb-6">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Odit quis numquam rerum architecto officiis maxime deleniti.
    <br><br>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Sit aut deserunt nesciunt velit saepe quasi pariatur.
  </p>

  <!-- Section Title -->
  <h2 class="font-bold text-[#0C295F] text-[16px] mb-2">Detail</h2>

  <!-- Content -->
  <p class="text-gray-700 leading-relaxed mb-10">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Ut odio sunt deserunt amet officia magni accusantium.
    <br><br>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    In voluptate eius impedit illum eveniet.
  </p>

<!-- Right action box -->
  <div class="border border-gray-200 rounded-xl p-6 shadow-md bg-white">
    <button class="w-full border border-[#0C295F] text-[#0C295F] py-2 rounded-lg mb-3">
      Back
    </button>
  </div>
  
  <div class="h-10"></div>
</div>

@include('layout.contact')
@include('layout.footer')
@endsection