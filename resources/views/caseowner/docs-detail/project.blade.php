@extends('layout.default')
@section('title', 'Docs Detail')
@section('content')
@include('layout.navbar_after')

<body class="bg-white text-gray-800">

    <div class="max-w-7xl mx-auto px-6 py-8">

        <!-- Title -->
        <h1 class="text-3xl font-bold mb-6">
            Project
        </h1>
        <!-- Back -->
        <a href="#" class="flex items-center gap-1 text-blue-900 text-sm font-semibold mb-4">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 12h14M5 12l4-4m-4 4 4 4" />
            </svg>
            <span class="relative -top-0.5">Back</span>
        </a>

        <!-- Tabs -->
        <div class="flex items-center justify-between border-b mb-6 text-sm">

            <!-- LEFT: Tabs -->
            <div class="flex gap-6">
                <button class="pb-2 border-b-2 border-blue-600 text-blue-600 font-medium">
                    All
                </button>
                <button class="pb-2 text-gray-500 hover:text-blue-600">
                    Ongoing
                </button>
                <button class="pb-2 text-gray-500 hover:text-blue-600">
                    Completed
                </button>
                <button class="pb-2 text-gray-500 hover:text-blue-600">
                    Declined
                </button>
                <button class="pb-2 text-gray-500 hover:text-blue-600">
                    Pending Approval
                </button>
                <button class="pb-2 text-gray-500 hover:text-blue-600">
                    Draft
                </button>
            </div>

            <!-- RIGHT: Date & Search -->
            <div class="flex items-center gap-3 text-gray-600">

                <!-- Date Dropdown -->
                <button class="flex items-center gap-1 text-gray-500 hover:text-blue-600">
                    <span>Date</span>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                    </svg>
                </button>

                <!-- Search Icon -->
                <button class="text-gray-500 hover:text-blue-600">
                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </button>

            </div>
        </div>


        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm border border-gray-300 border-collapse">

                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 p-3 text-left">Case Title</th>
                        <th class="border border-gray-300 p-3 text-left">Approval</th>
                        <th class="border border-gray-300 p-3 text-left">Date</th>
                        <th class="border border-gray-300 p-3 text-left">Draft</th>
                        <th class="border border-gray-300 p-3 text-left">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- Row 1 -->
                    <tr>
                        <!-- Case Title -->
                        <td class="border border-gray-300 p-3">
                            Lorem ipsum dolor sit amet
                        </td>

                        <!-- Status -->
                        <td class="border border-gray-300 p-3 font-medium text-green-600">
                            Ongoing
                        </td>

                        <!-- Date -->
                        <td class="border border-gray-300 p-3">
                            11 Desember 2025
                        </td>

                        <!-- Draft -->
                        <td class="border border-gray-300 p-3">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="whitespace-nowrap">Draft3.txt</span>

                                <button
                                    class="flex items-center gap-1 px-2 py-1 border border-black rounded-lg text-xs">
                                    Revision Version
                                </button>

                                <button class="flex items-center justify-center p-1 border border-black rounded-lg">
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                                    </svg>
                                </button>
                            </div>
                        </td>

                        <!-- Action -->
                        <td class="border border-gray-300 p-3">
                            <div class="flex flex-wrap items-center gap-2">
                                <button
                                    class="flex items-center gap-1 px-3 py-1 border border-black rounded-lg text-xs">
                                    Complete Case
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </button>

                                <button
                                    class="flex items-center gap-1 px-3 py-1 border border-black rounded-lg text-xs">
                                    Resign Case
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                    </svg>
                                </button>

                                <button class="px-3 py-1 border border-black rounded-lg text-xs">
                                    Chat
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <!-- Case Title -->
                        <td class="border border-gray-300 p-3">
                            consectetur adipiscing elit...
                        </td>

                        <!-- Status -->
                        <td class="border border-gray-300 p-3 font-medium text-yellow-600">
                            Pending
                        </td>

                        <!-- Date -->
                        <td class="border border-gray-300 p-3">
                            12 Desember 2025
                        </td>

                        <!-- Draft -->
                        <td class="border border-gray-300 p-3">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="whitespace-nowrap">Draft.txt</span>

                                <button
                                    class="flex items-center gap-1 px-2 py-1 border border-black rounded-lg text-xs">
                                    Revision Version
                                </button>

                                <button class="flex items-center justify-center p-1 border border-black rounded-lg">
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                                    </svg>
                                </button>
                            </div>
                        </td>

                        <!-- Action -->
                        <td class="border border-gray-300 p-3">
                            <div class="flex flex-wrap items-center gap-2">
                                <button
                                    class="flex items-center gap-1 px-3 py-1 border border-black rounded-lg text-xs opacity-50 cursor-not-allowed">
                                    Complete Case
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </button>

                                <button
                                    class="flex items-center gap-1 px-3 py-1 border border-black rounded-lg text-xs">
                                    Resign Case
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                    </svg>
                                </button>

                                <button class="px-3 py-1 border border-black rounded-lg text-xs">
                                    Chat
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr>
                        <!-- Case Title -->
                        <td class="border border-gray-300 p-3">
                            incididunt ut labore et dolore...
                        </td>

                        <!-- Status -->
                        <td class="border border-gray-300 p-3 font-medium text-red-600">
                            Deadline
                        </td>

                        <!-- Date -->
                        <td class="border border-gray-300 p-3">
                            07 Desember 2025
                        </td>

                        <!-- Draft -->
                        <td class="border border-gray-300 p-3">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="whitespace-nowrap">Draft.txt</span>

                                <button
                                    class="flex items-center gap-1 px-2 py-1 border border-black rounded-lg text-xs">
                                    Revision Version
                                </button>

                                <button class="flex items-center justify-center p-1 border border-black rounded-lg">
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                                    </svg>
                                </button>
                            </div>
                        </td>

                        <!-- Action -->
                        <td class="border border-gray-300 p-3">
                            <div class="flex flex-wrap items-center gap-2">
                                <button
                                    class="flex items-center gap-1 px-3 py-1 border border-black rounded-lg text-xs opacity-50 cursor-not-allowed">
                                    Complete Case
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </button>

                                <button
                                    class="flex items-center gap-1 px-3 py-1 border border-black rounded-lg text-xs opacity-50 cursor-not-allowed">
                                    Resign Case
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                    </svg>
                                </button>

                                <button
                                    class="px-3 py-1 border border-black rounded-lg text-xs opacity-50 cursor-not-allowed">
                                    Chat
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr>
                        <!-- Case Title -->
                        <td class="border border-gray-300 p-3">
                            Ut enim ad minim veniam
                        </td>

                        <!-- Status -->
                        <td class="border border-gray-300 p-3 font-medium">
                            Draft
                        </td>

                        <!-- Date -->
                        <td class="border border-gray-300 p-3">
                            14 Desember 2025
                        </td>

                        <!-- Draft -->
                        <td class="border border-gray-300 p-3">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="whitespace-nowrap">Draft.txt</span>

                                <button
                                    class="flex items-center gap-1 px-2 py-1 border border-black rounded-lg text-xs opacity-50 cursor-not-allowed">
                                    Revision Version
                                </button>

                                <button class="flex items-center justify-center p-1 border border-black rounded-lg">
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                                    </svg>
                                </button>
                            </div>
                        </td>

                        <!-- Action -->
                        <td class="border border-gray-300 p-3">
                            <div class="flex flex-wrap items-center gap-2">
                                <button
                                    class="flex items-center gap-1 px-3 py-1 border border-black rounded-lg text-xs">
                                    Ajukan solusi
                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2M12 4v12m0-12 4 4m-4-4L8 8" />
                                    </svg>
                                </button>

                                <button class="px-3 py-1 border border-black rounded-lg text-xs">
                                    Chat
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</body>
@include('layout.footer')
@endsection