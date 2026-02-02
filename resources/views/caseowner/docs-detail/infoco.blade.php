@extends('layout.default')
@section('title', 'Docs Detail')
@section('content')
@include('layout.navbar_after')

<body class="bg-gray-200 min-h-screen flex items-center justify-center">

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
        <div class="grid grid-cols-[320px_1fr] gap-20">

            <!-- LEFT CARD -->
            <div class="bg-white shadow-lg rounded-xl p-3 h-[530px] w-[350px] relative">

                <div
                    class="absolute top-0 right-0 bg-blue-900 text-white text-lg font-semibold px-5 py-2 rounded-tr-xl rounded-bl-xl">
                    Available
                </div>

                <h2 class="text-3xl flex justify-center font-bold mt-10 mb-28">Headline</h2>

                <div class="flex justify-center mb-24">
                    <img src="Liturtara Secondary Logo 1.png" alt="Logo" class="w-48">
                </div>

                <div class="text-center mb-3">
                    <p class="font-semibold text-lg">John Doe</p>
                    <p class="text-black font-semibold">UD Maju Jaya</p>
                </div>

                <p class="text-center text-black text-sm mt-24">
                    20 Oktober 2024
                </p>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="pr-6 w-full">

                <h1 class="text-2xl font-semibold mb-2">Lorem ipsum dolor sit amet</h1>

                <!-- Categories -->
                <div class="flex gap-2 mb-3">
                    <span class="border border-blue-900 text-blue-900 text-sm px-3 py-1 rounded-2xl">Category</span>
                    <span class="border border-blue-900 text-blue-900 text-sm px-3 py-1 rounded-2xl">Category</span>
                </div>

                <!-- Info Card -->
                <div class="bg-white shadow-md rounded-xl p-4 w-80 mb-6 relative">

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
                <p class="text-gray-700 leading-relaxed mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <p class="text-gray-700 leading-relaxed mb-5">
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

    <!-- OVERLAY -->
    <div class="fixed inset-0 bg-black/50 overflow-y-auto flex justify-center items-start pt-10">

        <!-- MODAL -->
        <div class="bg-white w-full max-w-4xl rounded-xl shadow-lg p-6 relative">

            <!-- CLOSE -->
            <button class="absolute top-4 right-4 text-gray-500 hover:text-black text-xl">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18 17.94 6M18 18 6.06 6" />
                </svg>
            </button>

            <!-- HEADER -->
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-3 mb-3">
                <img src="karyawan.png" class="w-28 h-28 sm:w-40 sm:h-40 rounded-full" />

                <div class="flex-1">
                    <span class="inline-block bg-blue-900 text-white text-sm font-bold px-3 py-1 rounded-tr-lg rounded-bl-lg mb-1">
                        SMEs
                    </span>

                    <h2 class="text-2xl font-bold text-blue-900">
                        John Doe Hartono
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-3 text-sm font-bold text-gray-600 mt-2">
                        <!-- KIRI -->
                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-blue-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 
                                    0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p>UD Maju Jaya</p>
                        </div>

                        <!-- KANAN -->
                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-blue-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                <ellipse cx="12" cy="12" rx="6" ry="10" stroke="currentColor" stroke-width="1.2" />
                                <ellipse cx="12" cy="12" rx="3" ry="10" stroke="currentColor" stroke-width="1.2" />
                                <ellipse cx="12" cy="12" rx="10" ry="6" stroke="currentColor" stroke-width="1.2" />
                                <ellipse cx="12" cy="12" rx="10" ry="3" stroke="currentColor" stroke-width="1.2" />
                            </svg>
                            <p>majujaya.id</p>
                        </div>

                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-blue-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M6 5V4a1 1 0 1 1 2 0v1h3V4a1 1 0 1 1 2 0v1h3V4a1 1 0 1 1 2 0v1h1a2 2 0 0 1 2 
                                    2v2H3V7a2 2 0 0 1 2-2h1ZM3 19v-8h18v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm5-6a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p>10 November 1999</p>
                        </div>

                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-blue-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p>majuyaja_id</p>
                        </div>

                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-blue-900 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <p>Tangerang Selatan</p>
                        </div>

                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-blue-900 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z" />
                                <path
                                    d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z" />
                            </svg>
                            <p>hello@majujaya.id</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- DESCRIPTION -->
            <p class="text-sm text-gray-600 mb-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum
            </p>

            <!-- PHOTO -->
            <h3 class="font-bold text-2xl text-blue-900 mb-2">Photo</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 md:grid-rows-2 gap-3">
                <img src="photo3.jpg" class="rounded-lg w-full h-full object-cover md:row-span-2 md:col-span-2">

                <img src="photo5.jpg" class="rounded-lg w-full h-full object-cover">
                <img src="photo1.jpg" class="rounded-lg w-full h-full object-cover">
                <img src="photo5.jpg" class="rounded-lg w-full h-full object-cover">
                <img src="photo1.jpg" class="rounded-lg w-full h-full object-cover">
            </div>



            <!-- PROJECT -->
            <h3 class="font-bold text-2xl text-blue-900 mt-3">Project</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- PROJECT CARD -->
                <div class="relative bg-white rounded-xl shadow-lg p-4">

                    <span
                        class="absolute top-0 right-0 bg-blue-900 text-white text-sm px-7 py-2 rounded-bl-lg rounded-tr-lg">
                        Available
                    </span>

                    <div
                        class="flex items-center absolute top-12 right-0 bg-gray-300 text-blue-900 text-sm px-2 py-2 rounded-bl-lg rounded-tl-lg">
                        <svg class="w-5 h-5 text-blue-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>
                        15 Des 2024
                    </div>

                    <h3 class="font-bold text-xl text-blue-900 mb-2">
                        Lorem ipsum dolor sit <br> amet Lorem
                    </h3>

                    <!-- Category -->
                    <div class="flex gap-2 mb-3">
                        <span class="border border-blue-500 text-blue-500 text-xs px-3 py-1 rounded-full">
                            Category
                        </span>
                        <span class="border border-blue-500 text-blue-500 text-xs px-3 py-1 rounded-full">
                            Category
                        </span>
                    </div>

                    <!-- Author & Date -->
                    <div class="flex items-center gap-4 text-black text-sm font-bold mb-3">
                        <div class="flex items-center gap-1">
                            <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            John Doe
                        </div>

                        <div class="flex items-center gap-1">
                            <svg class="w-5 h-5 text-black dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                            </svg>
                            2 Oktober 2024
                        </div>
                    </div>

                    <p class="text-sm text-gray-600 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    </p>

                    <div class="flex justify-end">
                        <button
                            class="bg-blue-900 text-white text-sm px-4 py-2 rounded-md w-32 flex items-center justify-center gap-1 hover:bg-blue-800">
                            View
                        </button>
                    </div>
                </div>

                <!-- DUPLICATE CARD -->
                <div class="relative bg-white rounded-xl shadow-lg p-4">
                    <span
                        class="absolute top-0 right-0 bg-blue-900 text-white text-sm px-7 py-2 rounded-bl-lg rounded-tr-lg">
                        Available
                    </span>

                    <div
                        class="flex items-center absolute top-12 right-0 bg-gray-300 text-blue-900 text-sm px-2 py-2 rounded-bl-lg rounded-tl-lg">
                        <svg class="w-5 h-5 text-blue-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>
                        15 Des 2024
                    </div>

                    <h3 class="font-bold text-xl text-blue-900 mb-2">
                        Lorem ipsum dolor sit <br> amet Lorem
                    </h3>

                    <!-- Category -->
                    <div class="flex gap-2 mb-3">
                        <span class="border border-blue-500 text-blue-500 text-xs px-3 py-1 rounded-full">
                            Category
                        </span>
                        <span class="border border-blue-500 text-blue-500 text-xs px-3 py-1 rounded-full">
                            Category
                        </span>
                    </div>

                    <!-- Author & Date -->
                    <div class="flex items-center gap-4 text-black text-sm font-bold mb-3">
                        <div class="flex items-center gap-1">
                            <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            John Doe
                        </div>

                        <div class="flex items-center gap-1">
                            <svg class="w-5 h-5 text-black dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                            </svg>
                            2 Oktober 2024
                        </div>
                    </div>

                    <p class="text-sm text-gray-600 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    </p>

                    <div class="flex justify-end">
                        <button
                            class="bg-blue-900 text-white text-sm px-4 py-2 rounded-md w-32 flex items-center justify-center gap-1 hover:bg-blue-800">
                            View
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>
