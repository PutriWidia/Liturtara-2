@extends('layout.default')
@section('title', 'Solution Review')
@section('content')
@include('layout.navbar_after')

<body class="bg-gradient-to-br from-blue-50 to-green-50 min-h-screen p-4 md:p-8">

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
        <div class="grid grid-cols-1 lg:grid-cols-[320px_1fr] gap-8">

            <!-- LEFT CARD -->
            <div class="bg-white shadow-lg rounded-xl p-3 w-full md:max-w-[350px] h-auto relative">

                <div
                    class="absolute top-0 right-0 bg-blue-500 text-white text-lg font-semibold px-5 py-2 rounded-tr-xl rounded-bl-xl">
                    Review
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

                <div class="flex flex-col md:flex-row gap-6">

                    <!-- Info Card -->
                    <div class="bg-white shadow-md rounded-xl p-4 w-full md:w-80 mb-6 relative">

                        <div
                            class="absolute top-0 right-0 bg-gray-200 text-blue-900 font-semibold text-xs px-3 py-2 rounded-bl-lg rounded-tr-lg flex items-center gap-1">
                            <svg class="w-4 h-4 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span>15 Des 2024</span>
                        </div>

                        <div class="flex items-center gap-2 mb-2 text-medium font-semibold">
                            <svg class="w-6 h-6 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <p>John Doe</p>
                        </div>

                        <div class="flex items-center gap-2 mb-2 text-medium font-semibold">
                            <svg class="w-6 h-6 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z" />
                            </svg>
                            <p>UD Maju Jaya</p>
                        </div>

                        <div class="flex items-center gap-2 mb-4 text-medium font-semibold">
                            <svg class="w-6 h-6 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
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

                    <!-- Solution By Card -->
                    <div class="bg-white shadow-md rounded-xl p-4 w-full md:w-80 mb-6 relative">

                        <!-- Title -->
                        <p class="text-gray-500 mb-2">Solution by :</p>

                        <!-- Profile -->
                        <div class="flex items-center gap-3 mb-3">
                            <!-- Avatar -->
                            <img src="karyawan.png" alt="Profile" class="w-6 h-6 rounded-full object-cover" />

                            <!-- Name -->
                            <p class="font-semibold text-gray-900">
                                Muhammad Patel
                            </p>
                        </div>

                        <!-- University -->
                        <div class="flex items-center gap-2 text-gray-700 mb-3">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M10.915 2.345a2 2 0 0 1 2.17 0l7 4.52A2 2 0 0 1 21 8.544V9.5a1.5 1.5 0 0 1-1.5 1.5H19v6h1a1 1 0 1 1 0 2H4a1 1 0 1 1 0-2h1v-6h-.5A1.5 1.5 0 0 1 3 9.5v-.955a2 2 0 0 1 .915-1.68l7-4.52ZM17 17v-6h-2v6h2Zm-6-6h2v6h-2v-6Zm-2 6v-6H7v6h2Z"
                                    clip-rule="evenodd" />
                                <path d="M2 21a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Z" />
                            </svg>
                            <p class="font-semibold">Universitas Haluoleo</p>
                        </div>

                        <div class="flex justify-between items-center">
                            <!-- Stars -->
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

                            <!-- View Profile -->
                            <button class="text-blue-900 text-sm font-semibold hover:underline">
                                View Profile
                            </button>
                        </div>

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

                <div class="flex items-center justify-between gap-4">

                    <!-- LEFT : Solusi Masalah Card -->
                    <div class="flex items-center gap-3 bg-white shadow-md rounded-xl px-5 py-3 w-full max-w-md">
                        <!-- Icon -->
                        <div class="text-blue-900">
                            <svg class="w-5 h-5 text-blue-900 group-hover:text-white transition"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linejoin="round"
                                    d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                            </svg>
                        </div>

                        <!-- Text -->
                        <div class="flex-1">
                            <p class="text-sm font-semibold">Solusi Masalah:</p>
                            <p class="text-sm font-semibold">Lorem ipsum dolor sit amet</p>
                        </div>

                        <!-- View Button -->
                        <button id="openModal"
                            class="bg-blue-900 text-white px-4 py-2 rounded-lg inline-flex items-center gap-2">
                            <span class="-translate-y-[2px] inline-block">View</span>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                            </svg>
                        </button>
                    </div>

                    <!-- RIGHT : Send Button -->
                    <button class="bg-blue-900 text-white px-3 py-2 rounded-lg flex items-center gap-1">
                        <span class="-translate-y-0.5 inline-block">Approve</span>
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                    </button>

                </div>

            </div>

        </div>

    </div>
@include('layout.footer')
@endsection

    <!-- OVERLAY -->
    <div class="fixed inset-0 bg-black/50 overflow-y-auto flex justify-center items-start pt-4 sm:pt-6 md:pt-10 px-4">

        <!-- MODAL -->
        <div class="bg-white w-full max-w-4xl rounded-2xl shadow-xl relative p-8">

            <!-- CLOSE -->
            <button class="absolute top-5 right-5 text-gray-500 hover:text-gray-800 text-2xl">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18 17.94 6M18 18 6.06 6" />
                </svg>
            </button>

            <!-- PROFILE -->
            <div class="flex justify-center">
                <div class="flex items-center gap-3 mb-3">
                    <img src="karyawan.png" class="w-32 h-32 rounded-full" />

                    <div>
                        <span class="inline-block bg-blue-900 text-white text-sm px-3 py-1 rounded-bl-lg rounded-tr-lg">
                            Beginner Researcher
                        </span>
                        <div class="flex items-center gap-1">
                            <p class="font-bold text-2xl">
                                Muhammad Patel
                            </p>

                            <img src="Vector.png" alt="Verified" class="w-3 h-3" />
                        </div>


                        <div class="flex items-center text-yellow-400 text-sm mt-2 mb-2">
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

                        <div class="mb-5 text-gray-700">

                            <!-- Ikon + Nama (sejajar) -->
                            <div class="flex items-center gap-2 text-gray-700 mb-3">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M10.915 2.345a2 2 0 0 1 2.17 0l7 4.52A2 2 0 0 1 21 8.544V9.5a1.5 1.5 0 0 1-1.5 1.5H19v6h1a1 1 0 1 1 0 2H4a1 1 0 1 1 0-2h1v-6h-.5A1.5 1.5 0 0 1 3 9.5v-.955a2 2 0 0 1 .915-1.68l7-4.52ZM17 17v-6h-2v6h2Zm-6-6h2v6h-2v-6Zm-2 6v-6H7v6h2Z"
                                        clip-rule="evenodd" />
                                    <path d="M2 21a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Z" />
                                </svg>
                                <p class="text-sm md:text-base font-semibold">Universitas Haluoleo</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- TITLE -->
            <h3 class="text-xl font-bold text-blue-900 mb-4">
                Solution Review
            </h3>

            <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-xl mb-4">
                <div class="flex flex-col md:flex-row gap-6">

                    <!-- LEFT CARD -->
                    <div class="w-full md:w-5/12 bg-white rounded-xl shadow-xl p-4 relative">
                        <!-- Status -->
                        <span
                            class="absolute top-0 right-0 bg-green-500 text-white text-sm px-6 py-2 rounded-bl-lg rounded-tr-lg">
                            Complete
                        </span>

                        <div
                            class="flex items-center absolute top-12 right-0 bg-gray-300 text-blue-900 text-sm px-2 py-2 rounded-bl-lg rounded-tl-lg">
                            <svg class="w-5 h-5 text-blue-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                            </svg>
                            15 Des 2024
                        </div>

                        <h3 class="font-semibold text-lg md:text-xl text-blue-900 mb-2">
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

                    <!-- RIGHT REVIEW -->
                    <div class="w-full md:w-7/12 flex flex-col justify-between">

                        <!-- Stars -->
                        <div class="rating flex justify-center gap-2 cursor-pointer p-5" data-rating="0">
                            <svg data-value="1" class="star w-8 h-8 md:w-10 md:h-10 text-gray-300 hover:text-yellow-400"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 17.3l6.18 3.7-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>

                            <svg data-value="2" class="star w-8 h-8 md:w-10 md:h-10 text-gray-300 hover:text-yellow-400"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 17.3l6.18 3.7-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>

                            <svg data-value="3" class="star w-8 h-8 md:w-10 md:h-10 text-gray-300 hover:text-yellow-400"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 17.3l6.18 3.7-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>

                            <svg data-value="4" class="star w-8 h-8 md:w-10 md:h-10 text-gray-300 hover:text-yellow-400"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 17.3l6.18 3.7-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>

                            <svg data-value="5" class="star w-8 h-8 md:w-10 md:h-10 text-gray-300 hover:text-yellow-400"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 17.3l6.18 3.7-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                        </div>



                        <!-- Review box -->
                        <div class="flex justify-center mb-7">
                            <textarea rows="5" class="w-full max-w-[380px] resize-none text-sm border rounded-lg p-4
                               focus:outline-none focus:ring-2 focus:ring-gray-400"
                                placeholder="Write first review about Muhammad Patel's work">
                            </textarea>
                        </div>




                    </div>
                </div>
            </div>

            <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-xl">
                <div class="flex flex-col md:flex-row gap-6">

                    <!-- LEFT CARD -->
                    <div class="w-full md:w-1/2 bg-white rounded-xl shadow-xl p-4 relative">
                        <!-- Status -->
                        <span
                            class="absolute top-0 right-0 bg-green-500 text-white text-sm px-6 py-2 rounded-bl-lg rounded-tr-lg">
                            Complete
                        </span>

                        <div
                            class="flex items-center absolute top-12 right-0 bg-gray-300 text-blue-900 text-sm px-2 py-2 rounded-bl-lg rounded-tl-lg">
                            <svg class="w-5 h-5 text-blue-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                            </svg>
                            15 Des 2024
                        </div>

                        <h3 class="font-semibold text-xl text-blue-900 mb-2">
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

                    <!-- RIGHT REVIEW -->
                    <div class="w-full md:w-2/3 flex flex-col justify-between">

                        <!-- Stars -->
                        <!-- Stars -->
                        <div class="rating flex justify-center gap-2 cursor-pointer p-5" data-rating="0">
                            <svg data-value="1" class="star w-8 h-8 md:w-10 md:h-10 text-gray-300 hover:text-yellow-400"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 17.3l6.18 3.7-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>

                            <svg data-value="2" class="star w-8 h-8 md:w-10 md:h-10 text-gray-300 hover:text-yellow-400"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 17.3l6.18 3.7-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>

                            <svg data-value="3" class="star w-8 h-8 md:w-10 md:h-10 text-gray-300 hover:text-yellow-400"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 17.3l6.18 3.7-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>

                            <svg data-value="4" class="star w-8 h-8 md:w-10 md:h-10 text-gray-300 hover:text-yellow-400"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 17.3l6.18 3.7-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>

                            <svg data-value="5" class="star w-8 h-8 md:w-10 md:h-10 text-gray-300 hover:text-yellow-400"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 17.3l6.18 3.7-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                        </div>



                        <!-- Review box -->
                        <div class="flex justify-center mb-7">
                            <textarea rows="5" class="w-full max-w-[380px] resize-none text-sm border rounded-lg p-4
                               focus:outline-none focus:ring-2 focus:ring-gray-400"
                                placeholder="Write first review about Muhammad Patel's work">
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.rating').forEach(rating => {
            const stars = rating.querySelectorAll('.star');

            stars.forEach(star => {
                star.addEventListener('click', () => {
                    const value = Number(star.dataset.value);
                    rating.dataset.rating = value;

                    stars.forEach(s => {
                        if (Number(s.dataset.value) <= value) {
                            s.classList.add('text-yellow-400');
                            s.classList.remove('text-gray-300');
                        } else {
                            s.classList.add('text-gray-300');
                            s.classList.remove('text-yellow-400');
                        }
                    });
                });
            });
        });
    </script>



</body>
