@extends('layout.default')
@section('title', 'Docs Detail')
@section('content')
@include('layout.navbar_after')

<body class="bg-gradient-to-br from-blue-50 to-green-50 min-h-screen p-4 sm:p-6 md:p-8">

    <!-- WRAPPER AGAR KONTEN DI TENGAH -->
    <div class="max-w-5xl mx-auto"> <!-- DIBESARKAN -->

        <!-- Back Button -->
        <div class="mb-2">
            <button class="flex items-center gap-2 text-sm hover:underline">
                <svg class="w-6 h-6 translate-y-[1px]" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
                <span class="-ml-1 font-semibold">Back</span>
            </button>
        </div>


        <!-- GRID 2 KOLOM -->
        <div class="grid grid-cols-1 lg:grid-cols-[350px_1fr] gap-8 lg:gap-20">

            <!-- LEFT CARD -->
            <div class="bg-white shadow-lg rounded-xl p-3 h-[530px] relative">

                <div
                    class="absolute top-0 right-0 bg-blue-900 text-white text-lg font-semibold px-5 py-2 rounded-tr-xl rounded-bl-xl">
                    Available
                </div>

                <h2 class="text-3xl flex justify-center font-bold mt-10 mb-28">Headline</h2>

                <div class="flex justify-center mb-12 sm:mb-24">
                    <img src="Liturtara Secondary Logo 1.png" alt="Logo" class="w-32 sm:w-40 md:w-48">
                </div>

                <div class="text-center mb-3">
                    <p class="font-semibold text-lg">John Doe</p>
                    <p class="text-black font-semibold">UD Maju Jaya</p>
                </div>

                <p class="text-center text-black text-sm mt-12 sm:mt-24">
                    20 Oktober 2024
                </p>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="w-full md:pr-6">

                <h1 class="text-xl sm:text-2xl font-semibold mb-2">Lorem ipsum dolor sit amet</h1>

                <!-- Categories -->
                <div class="flex gap-2 mb-3">
                    <span class="border border-blue-900 text-blue-900 text-sm px-3 py-1 rounded-2xl">Category</span>
                    <span class="border border-blue-900 text-blue-900 text-sm px-3 py-1 rounded-2xl">Category</span>
                </div>

                <!-- Info Card -->
                <div class="bg-white shadow-md rounded-xl p-4 w-full sm:w-80 mb-6 relative">

                    <div
                        class="absolute top-0 right-0 bg-gray-200 text-blue-900 font-semibold text-xs px-3 py-2 rounded-bl-lg rounded-tr-lg flex items-center gap-1">
                        <svg class="w-4 h-4 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>15 Des 2024</span>
                    </div>

                    <div class="flex items-center gap-2 mb-2 text-medium font-semibold">
                        <svg class="w-6 h-6 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <p>John Doe</p>
                    </div>

                    <div class="flex items-center gap-2 mb-2 text-medium font-semibold">
                        <svg class="w-6 h-6 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z" />
                        </svg>
                        <p>UD Maju Jaya</p>
                    </div>

                    <div class="flex items-center gap-2 mb-4 text-medium font-semibold">
                        <svg class="w-6 h-6 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>
                        <p>2 Oktober 2024</p>
                    </div>

                    <div class="flex justify-end">
                        <button class="text-blue-900 text-sm font-semibold hover:underline">
                            View Profile
                        </button>
                    </div>
                </div>


                <!-- Description -->
                <p class="text-gray-700 leading-relaxed mb-5 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <p class="text-gray-700 leading-relaxed mb-5 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>

                <!-- Delete Button -->
                <div class="flex justify-end">
                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg flex items-center gap-1">
                        <span class="-translate-y-0.5 inline-block">Delete</span>
                        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 17.94 6M18 18 6.06 6" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>

    </div>
@include('layout.footer')
@endsection

    <!-- BACKDROP -->
    <div class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">

        <!-- MODAL BOX -->
        <div class="bg-white w-full max-w-[500px] mx-4 rounded-2xl shadow-xl p-6 sm:p-8 md:p-10 text-center">

            <h1 class="text-xl sm:text-2xl font-bold text-blue-900 mb-6 sm:mb-8">
                Are you sure you want to delete this file?
            </h1>

            <div class="flex flex-col sm:flex-row justify-center gap-3">
                <button class="bg-blue-900 text-white font-semibold px-8 py-2 rounded-xl hover:bg-blue-800">
                    No
                </button>

                <button
                    class="bg-white text-red-500 hover:text-white font-semibold px-8 py-2 border border-red-500 rounded-xl hover:bg-red-600">
                    Yes
                </button>
            </div>

        </div>
    </div>



</body>

