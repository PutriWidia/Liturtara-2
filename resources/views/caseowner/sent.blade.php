<div class="bg-white grid grid-cols-1 md:grid-cols-2 gap-8">

    {{-- CARD --}}
    <div class="relative bg-white rounded-2xl shadow-lg p-6">

        {{-- Badge --}}
        <span class="absolute top-0 right-0 bg-blue-900 text-white text-sm px-3 py-2 rounded-bl-lg rounded-tr-lg">
            Available
        </span>

        {{-- Title --}}
        <h3 class="text-navy text-xl font-bold mb-3 leading-snug">
            Lorem ipsum dolor sit amet Lorem
        </h3>

        {{-- Category --}}
        <div class="flex flex-wrap gap-2 mb-3">
            <span class="border border-navy text-navy text-xs px-3 py-1 rounded-full">
                Category
            </span>
            <span class="border border-navy text-navy text-xs px-3 py-1 rounded-full">
                Category
            </span>
        </div>

        {{-- Meta --}}
        <div class="flex items-center gap-4 text-sm text-gray-700 mb-4">
            <span class="flex items-center gap-1">
                👤 John Doe
            </span>
            <span class="flex items-center gap-1">
                📅 2 Oktober 2024
            </span>
        </div>

        {{-- Description --}}
        <p class="text-gray-500 text-sm mb-6 leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor.
        </p>

        {{-- Action --}}
        <div class="flex items-center justify-between">

            <span class="flex items-center gap-1 text-sm bg-gray-100 px-3 py-2 rounded-lg text-navy">
                ⏱ 15 Des 2024
            </span>

            <div class="flex gap-3">
                <button
                    class="border border-red-500 text-red-500 px-4 py-2 rounded-lg text-sm hover:bg-red-50 transition">
                    Delete ✕
                </button>

                <button
                    class="bg-navy text-white px-4 py-2 rounded-lg text-sm flex items-center gap-1 hover:bg-blue-800 transition">
                    View →
                </button>
            </div>

        </div>
    </div>

    {{-- DUPLIKASI CARD (SESUAI GAMBAR, TANPA LOOP) --}}
    <div class="relative bg-white rounded-2xl shadow-lg p-6">

        <span class="absolute top-4 right-4 bg-navy text-white text-xs px-3 py-1 rounded-lg">
            Available
        </span>

        <h3 class="text-navy text-xl font-bold mb-3 leading-snug">
            Lorem ipsum dolor sit amet Lorem
        </h3>

        <div class="flex flex-wrap gap-2 mb-3">
            <span class="border border-navy text-navy text-xs px-3 py-1 rounded-full">
                Category
            </span>
            <span class="border border-navy text-navy text-xs px-3 py-1 rounded-full">
                Category
            </span>
        </div>

        <div class="flex items-center gap-4 text-sm text-gray-700 mb-4">
            <span class="flex items-center gap-1">👤 John Doe</span>
            <span class="flex items-center gap-1">📅 2 Oktober 2024</span>
        </div>

        <p class="text-gray-500 text-sm mb-6 leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor.
        </p>

        <div class="flex items-center justify-between">
            <span class="flex items-center gap-1 text-sm bg-gray-100 px-3 py-2 rounded-lg text-navy">
                ⏱ 15 Des 2024
            </span>

            <div class="flex gap-3">
                <button class="border border-red-500 text-red-500 px-4 py-2 rounded-lg text-sm">
                    Delete ✕
                </button>
                <button class="bg-navy text-white px-4 py-2 rounded-lg text-sm">
                    View →
                </button>
            </div>
        </div>
    </div>
</div>

<div class="relative w-full flex items-center justify-center top-10 mb-10">

    <div class="flex gap-3 items-center justify-center">
        @php
          $currentPage = request('page', 1);
        @endphp
        
        @if ($currentPage > 1)
          <a
            href="{{ request()->fullUrlWithQuery(['page' => $currentPage - 1]) }}"
            class="flex items-center justify-center w-10 h-10 border border-gray-300 rounded-lg">
              ←
          </a>
        @endif

        <a
          href="{{ request()->fullUrlWithQuery(['page' => $currentPage + 1]) }}"
          class="flex items-center justify-center gap-2 px-3 py-1.5
                text-white bg-blue-900 rounded-lg hover:bg-blue-800 transition">
            <span>Next</span>
            <span class="text-lg">→</span>
        </a>

    </div>

    <div class="absolute right-20 flex items-center gap-2 text-gray-700 text-sm">
      <span>Page</span>
      <span class="px-3 py-1 border border-gray-300 rounded-md">1</span>
      <span>of 2</span>
    </div>

</div>

