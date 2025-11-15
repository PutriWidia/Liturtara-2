@extends('layout.default')
@section('title', 'Dashboard Case Owner')
@section('content')
    @include('layout.navbar_after')

    {{-- alert --}}
    @include('layout.alert')

    <!-- Hero Section -->
<section class="w-full bg-gray-50 mt-10">
    <div class="max-w-6xl mx-auto px-4">
        <div class="relative w-full">
            <img src="{{ asset('image/medium-shot-business-ownerrs-posiing 1.png') }}" 
                alt="Case Owner Banner"
                class="w-full h-80 object-cover object-top rounded-t-lg" />
            <div class="absolute bottom-0 left-0 p-8 text-navy">
                <h1 class="text-3xl font-bold mb-2">Case Owner Service</h1>
                <p class="text-sm text-gray-700">Temukan, kelola, dan pantau case milikmu dengan mudah.</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="bg-gray-50">
    <!-- Tabs Navigation -->
    <div class="border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4">
            <nav class="flex space-x-8 py-3">
                <a href="#" class="relative pb-2 text-sm font-semibold text-navy flex items-center">
                    Case Owner
                    <span class="absolute left-0 -bottom-0.5 w-full h-1 bg-navy rounded"></span>
                </a>
            </nav>
        </div>
    </div>

    <!-- Search Section -->
    <section class="py-10 bg-cover bg-center" style="background-image: url('/image/Case Owner Back.png');">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-navy mb-6 text-center">Find your case</h2>

            <div class="flex justify-center mb-8">
                <div class="relative w-full max-w-xl">
                    <form action="{{ route('caseowner.dashboard') }}" method="get">
                        <input name="search" type="text" placeholder="Search your case..."
                            value="{{ $search ?? '' }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-navy" />
                        <button type="submit"
                            class="absolute right-0 top-0 h-full px-5 bg-navy text-white rounded-r-md hover:bg-navy-dark transition-all flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Case List Section -->
    <section class="py-10">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-6">
            
            <!-- Sidebar Filter -->
            <div class="md:col-span-1 shadow-md h-fit rounded-lg bg-white">
                @foreach (['Sent', 'Available', 'In-progress', 'Completed', 'Cancelled', 'Expired'] as $status)
                    <div>
                        <a href="{{ request()->fullUrlWithQuery(['status' => $status]) }}"
                     @extends('layout.default')
@section('title', 'Dashboard Case Owner')
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

    <!-- Konten dibatasi max-width -->
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
      <img src="{{ asset('image/document.png') }}" alt="gambar" class="w-full h-auto">
    </div>
  </div>
</div>
</section>


      <!-- Case Section -->
 <section class="max-w-7xl mx-auto px-8 py-10 flex flex-col md:flex-row gap-8">
  <!-- Sidebar -->
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
        <li class="group px-6 py-3 text-blue-900 hover:bg-blue-900 hover:text-white flex items-center gap-2 cursor-pointer transition-colors">
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

  
    <!-- Empty State -->
    <div class="w-full md:w-3/4 flex flex-col items-center justify-center text-center">
      <div class="w-[80px] rounded-md">
          <img src="{{ asset('image/icon file.png') }}" alt="gambar file" class="w-full h-auto">
        </div>
      <p class="text-lg font-semibold text-blue-900 mb-6">
        You haven't uploaded any case,<br>upload your case now
      </p>
      <button class="bg-blue-900 text-white px-6 py-3 rounded-lg flex items-center gap-2 hover:bg-blue-800 transition-colors">
       Upload Case
       <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2M12 4v12m0-12 4 4m-4-4L8 8"/>
  </svg>
</button>
    </div>
  </section>


@include('layout.contact')
@include('layout.footer')
@endsection
       class="block px-4 py-2 rounded {{ request('status') === $status ? 'bg-navy text-white font-semibold' : 'hover:bg-gray-100 text-gray-700' }}">
                            {{ $status }}
                        </a>
                    </div>
                @endforeach
                <a href="{{ route('caseowner.dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-500">
                    Reset Filter
                </a>
            </div>

            <!-- Case Cards -->
            <div class="md:col-span-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($cases as $case)
                    @php
                        $statusColor = match ($case->status) {
                            'Available' => 'bg-navy',
                            'In-progress' => 'bg-yellow-500',
                            'Cancelled', 'Expired' => 'bg-red-500',
                            'Completed' => 'bg-green-500',
                            default => 'bg-gray-500',
                        };
                    @endphp

                    <div class="bg-white rounded-lg shadow-md overflow-hidden relative flex flex-col">
                        <div class="p-6 flex flex-col h-full">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg font-bold text-navy">{{ $case->title }}</h3>
                                <span
                                    class="absolute top-0 right-0 {{ $statusColor }} text-white text-xs font-medium px-3 py-1.5 rounded-bl-lg">
                                    {{ $case->status }}
                                </span>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-3">
                                @foreach (explode(',', $case->category) as $cat)
                                    <span class="bg-white text-xs border border-gray-300 rounded px-3 py-1">
                                        {{ trim($cat) }}
                                    </span>
                                @endforeach
                            </div>

                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                {{ $case->description }}
                            </p>

                            <div class="mt-auto flex justify-between items-center border-t pt-3">
                                <div class="text-xs text-gray-500">
                                    {{ $case->updated_at->format('d M Y') }}
                                </div>

                                <div class="flex space-x-2">
                                    <button
                                        class="border border-red-500 text-red-500 hover:text-red-700 px-4 py-2 rounded-md text-sm">
                                        Delete
                                    </button>
                                    @if ($case->status == 'Completed')
                                        @if ($case->review)
                                            <button
                                                class="bg-green-500 text-white px-4 py-2 rounded-md text-sm">
                                                Reviewed
                                            </button>
                                        @else
                                            <a href="{{ route('caseowner.reviews.create', $case->id) }}"
                                                class="bg-navy text-white px-4 py-2 rounded-md text-sm hover:bg-navy-dark transition">
                                                Review
                                            </a>
                                        @endif
                                    @else
                                        <button
                                            class="bg-navy text-white px-4 py-2 rounded-md text-sm hover:bg-navy-dark transition">
                                            View
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="col-span-3 text-center text-gray-400 text-lg py-10">
                        {{ $search ? 'Case not found.' : 'There’s no uploaded cases.' }}
                    </p>
                @endforelse
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-10 mx-4">
            {{ $cases->links() }}
        </div>
    </section>
</main>


    @include('layout.contact')
    @include('layout.footer')

    <!-- JavaScript untuk Toggle Menu -->
    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("menu").classList.toggle("hidden");
        });
    </script>

@endsection
