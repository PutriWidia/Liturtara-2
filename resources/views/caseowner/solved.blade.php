<div class="bg-white grid grid-cols-1 md:grid-cols-2 gap-8">

    {{-- CARD --}}
    <div class="relative bg-white rounded-2xl shadow-lg p-6">

        {{-- Badge --}}
        <span class="absolute top-0 right-0 bg-green-500 text-white text-sm px-3 py-2 rounded-bl-lg rounded-tr-lg">
            Completed
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
</div>
