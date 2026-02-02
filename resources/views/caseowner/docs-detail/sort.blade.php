@extends('layout.default')
@section('title', 'Docs Detail')
@section('content')
@include('layout.navbar_after')

<body class="bg-gradient-to-br from-blue-50 to-green-50 min-h-screen p-8">

    <!-- WRAPPER AGAR KONTEN DI TENGAH -->
    <div class="max-w-5xl mx-auto">

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
        <div class="grid grid-cols-1 lg:grid-cols-[320px_1fr] gap-8 lg:gap-20">

            
            <div class="bg-white shadow-lg rounded-xl p-3 h-auto lg:h-[530px] w-full lg:w-[350px] relative mx-auto">

                <div
                    class="absolute top-0 right-0 bg-gray-500 text-white text-lg font-semibold px-5 py-2 rounded-tr-xl rounded-bl-xl">
                    Waiting
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

            <div>

                <div class="flex flex-col gap-1">

                    <!-- BAGIAN HEADER + BACK -->
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end gap-2">
                        <div>
                            <h1 class="text-2xl sm:text-3xl font-bold text-blue-900">Solution List</h1>
                            <p class="text-sm text-black mt-1">3 Talent Submitting draft for client issues</p>
                        </div>

                        <a href="#" class="text-sm text-black hover:underline mb-1">Back</a>
                    </div>

                    <!-- GARIS PEMBATAS -->
                    <div class="border-b border-black w-full mb-3"></div>

                </div>


                <!-- FILTER -->


                <div class="relative flex flex-wrap items-center gap-3 mb-4 cursor-pointer" id="sortBtn">

                    <!-- LABEL SORT -->
                    <span class="text-sm text-black whitespace-nowrap">
                        Latest Date
                    </span>

                    <!-- ICON ARROW -->
                    <svg class="w-4 h-4 text-gray-800 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 9-7 7-7-7" />
                    </svg>

                    <!-- SEARCH -->
                    <div class="relative flex items-center">
                        <!-- Icon -->
                        <span class="pointer-events-none absolute left-3">
                            <svg class="w-4 h-4 text-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </span>

                        <!-- Input -->
                        <input type="search" placeholder="Search..." class="h-7 w-full sm:w-55 pl-9 pr-3
                            bg-transparent border border-black rounded-2xl
                            text-sm text-black placeholder-gray-400
                            focus:outline-none" />
                    </div>



                    <!-- DROPDOWN MENU -->
                    <div id="sortMenu"
                        class="hidden absolute left-0 top-full bg-white shadow-lg rounded-md py-2 w-40 text-sm mt-1 z-50">

                        <button data-value="Latest Date" class="block w-full text-left px-4 py-2 hover:bg-gray-100">
                            Latest Date
                        </button>

                        <button data-value="Earliest Date" class="block w-full text-left px-4 py-2 hover:bg-gray-100">
                            Earliest Date
                        </button>

                        <button data-value="Talent Category" class="block w-full text-left px-4 py-2 hover:bg-gray-100">
                            Talent Category
                        </button>

                    </div>

                </div>


                <!-- LIST CARD -->
                <div class="space-y-4">

                    <!-- CARD 1 -->
                    <div class="bg-white rounded-2xl p-5 shadow-lg border-white">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-1">
                            <h2 class="font-bold text-lg text-blue-900 leading-tight">
                                Lorem ipsum dolor sit amet
                            </h2>
                            <p class="text-gray-700 text-sm whitespace-nowrap">15 Desember 2025</p>
                        </div>

                        <p class="text-xs text-black mt-2">
                            Submitted by<br>
                            <span class="font-semibold text-black">Muhammad patin</span>
                        </p>

                        <div class="flex items-center text-yellow-400 text-sm mt-2">
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>
                        </div>

                        <div class="flex justify-between items-center mt-1 flex-wrap gap-3">

                            <!-- LEFT: VIEW PROFILE -->
                            <a href="#" class="text-blue-900 underline text-sm">
                                View Talent Profile
                            </a>

                            <!-- RIGHT: BUTTON GROUP -->
                            <div class="flex gap-2 flex-wrap">
                                <button
                                    class="px-3 py-1 border border-red-500 text-red-500 hover:text-white rounded-lg text-sm hover:bg-red-500">
                                    Report
                                </button>

                                <button
                                    class="px-3 py-1 border border-gray-500 text-gray-500 hover:text-white rounded-lg text-sm hover:bg-gray-500">
                                    Draft
                                </button>

                                <button
                                    class="px-3 py-1 bg-blue-900 text-white rounded-lg text-xs sm:text-sm hover:bg-blue-800 flex items-center gap-1">

                                    <span class="relative -translate-y-[1.5px]">Approve Solution</span>

                                    <svg class="w-5 h-5 text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>

                                </button>


                            </div>

                        </div>

                    </div><div class="bg-white rounded-2xl p-5 shadow-lg border-white">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-1">
                            <h2 class="font-bold text-lg text-blue-900 leading-tight">
                                Consectetur adipiscing elit
                            </h2>
                            <p class="text-gray-700 text-sm whitespace-nowrap">13 Desember 2025</p>
                        </div>

                        <p class="text-xs text-black mt-2">
                            Submitted by<br>
                            <span class="font-semibold text-black">Endi sugandi</span>
                        </p>

                        <div class="flex items-center text-yellow-400 text-sm mt-2">
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>
                        </div>

                        <div class="flex justify-between items-center mt-1 flex-wrap gap-3">

                            <!-- LEFT: VIEW PROFILE -->
                            <a href="#" class="text-blue-900 underline text-sm">
                                View Talent Profile
                            </a>

                            <!-- RIGHT: BUTTON GROUP -->
                            <div class="flex gap-2 flex-wrap">
                                <button
                                    class="px-3 py-1 border border-red-500 text-red-500 hover:text-white rounded-lg text-sm hover:bg-red-500">
                                    Report
                                </button>

                                <button
                                    class="px-3 py-1 border border-gray-500 text-gray-500 hover:text-white rounded-lg text-sm hover:bg-gray-500">
                                    Draft
                                </button>

                                <button
                                    class="px-3 py-1 bg-blue-900 text-white rounded-lg text-xs sm:text-sm hover:bg-blue-800 flex items-center gap-1">

                                    <span class="relative -translate-y-[1.5px]">Approve Solution</span>

                                    <svg class="w-5 h-5 text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>

                                </button>


                            </div>

                        </div>

                    </div>

                    <div class="bg-white rounded-2xl p-5 shadow-lg border-white">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-1">
                            <h2 class="font-bold text-lg text-blue-900 leading-tight">
                                Sed do eiusmod tempor incididunt
                            </h2>
                            <p class="text-gray-700 text-sm whitespace-nowrap">6 Desember 2025</p>
                        </div>

                        <p class="text-xs text-black mt-2">
                            Submitted by<br>
                            <span class="font-semibold text-black">Adi mulyadi</span>
                        </p>

                        <div class="flex items-center text-yellow-400 text-sm mt-2">
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>
                        </div>

                        <div class="flex justify-between items-center mt-1 flex-wrap gap-3">

                            <!-- LEFT: VIEW PROFILE -->
                            <a href="#" class="text-blue-900 underline text-sm">
                                View Talent Profile
                            </a>

                            <!-- RIGHT: BUTTON GROUP -->
                            <div class="flex gap-2 flex-wrap">
                                <button
                                    class="px-3 py-1 border border-red-500 text-red-500 hover:text-white rounded-lg text-sm hover:bg-red-500">
                                    Report
                                </button>

                                <button
                                    class="px-3 py-1 border border-gray-500 text-gray-500 hover:text-white rounded-lg text-sm hover:bg-gray-500">
                                    Draft
                                </button>

                                <button
                                    class="px-3 py-1 bg-blue-900 text-white rounded-lg text-xs sm:text-sm hover:bg-blue-800 flex items-center gap-1">

                                    <span class="relative -translate-y-[1.5px]">Approve Solution</span>

                                    <svg class="w-5 h-5 text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>

                                </button>


                            </div>

                        </div>

                    </div>

                </div>


            </div>
            <script>
                const sortBtn = document.getElementById("sortBtn");
                const sortMenu = document.getElementById("sortMenu");
                const sortLabel = document.getElementById("sortLabel");

                // Toggle dropdown
                sortBtn.addEventListener("click", () => {
                    sortMenu.classList.toggle("hidden");
                });

                // Handle selection
                document.querySelectorAll("#sortMenu button").forEach(btn => {
                    btn.addEventListener("click", () => {
                        sortLabel.textContent = btn.dataset.value; // ganti teks
                        sortMenu.classList.add("hidden");
                    });
                });

                // Click outside hide
                document.addEventListener("click", (e) => {
                    if (!sortBtn.contains(e.target) && !sortMenu.contains(e.target)) {
                        sortMenu.classList.add("hidden");
                    }
                });
            </script>



</body>

@include('layout.footer')
@endsection
