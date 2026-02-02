@extends('layout.default')
@section('title', 'Docs Detail')
@section('content')
@include('layout.navbar_after')

<body class="bg-gradient-to-br from-blue-50 to-green-50 min-h-screen p-4 sm:p-6 lg:p-8">

    
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

            <!-- LEFT CARD -->
            <div class="bg-white shadow-lg rounded-xl p-3 h-auto lg:h-[530px] w-full lg:w-[350px] relative mx-auto">

                <div
                    class="absolute top-0 right-0 bg-gray-500 text-white text-lg font-semibold px-5 py-2 rounded-tr-xl rounded-bl-xl">
                    Waiting
                </div>

                <h2 class="flex justify-center font-bold text-2xl lg:text-3xl mt-6 lg:mt-10 mb-10 lg:mb-28">Headline
                </h2>

                <div class="flex justify-center mb-10 lg:mb-24">
                    <img src="Liturtara Secondary Logo 1.png" alt="Logo" class="w-48">
                </div>

                <div class="text-center mb-3">
                    <p class="font-semibold text-lg">John Doe</p>
                    <p class="text-black font-semibold">UD Maju Jaya</p>
                </div>

                <p class="text-center text-black text-sm mt-10 lg:mt-24">
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

                <div class="relative flex flex-wrap items-center gap-3 mb-4" id="sortBtn">

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
                        <input type="search" placeholder="Search..." class="h-8 w-full sm:w-55 pl-9 pr-3
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


                <p class="text-black text-sm mb-1">1 Solution found
                </p>
                <!-- LIST CARD -->
                <div class="space-y-1">

                    <!-- CARD 1 -->
                    <div class="bg-white rounded-2xl p-5 shadow-lg border-white">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-1">
                            <h2 class="font-bold text-lg text-blue-900 leading-tight">
                                Consectetur adipiscing elit
                            </h2>
                            <p class="text-gray-700 text-sm whitespace-nowrap">13 Desember 2025</p>
                        </div>

                        <p class="text-xs text-black mt-2">
                            Submitted by<br>
                            <span class="font-semibold text-black">Edi Sugandi</span>
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
                                <button onclick="openReport()"
                                    class="px-3 py-1 border border-red-500 text-red-500 hover:text-white rounded-lg text-sm hover:bg-red-500">
                                    Report
                                </button>

                                <button
                                    class="px-3 py-1 border border-gray-500 text-gray-500 hover:text-white rounded-lg text-xs sm:text-sm hover:bg-gray-500">
                                    Draft
                                </button>

                                <button onclick="openApproveModal()"
                                    class="px-3 py-1 bg-blue-900 text-white rounded-lg text-sm hover:bg-blue-800 flex items-center gap-1">

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
            @include('layout.footer')
            @endsection


            <!-- OVERLAY -->
            <div id="reportOverlay" class="fixed inset-0 bg-black/40 hidden z-50 flex items-center justify-center">

                <!-- MODAL -->
                <div class="bg-white rounded-2xl w-full max-w-[420px] mx-4 p-6 shadow-xl relative">

                    <h2 class="text-xl font-bold text-blue-900 mb-1">
                        Report Solution
                    </h2>

                    <p class="text-sm text-gray-600 mb-4">
                        Why do you want to report this solution
                    </p>

                    <!-- REASON -->
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Choose the reason
                    </label>

                    <select class="w-full border rounded-lg px-3 py-2 text-sm">
                        <option>Reason</option>
                        <option>Spam</option>
                        <option>Inappropriate Content</option>
                        <option>Incorrect Information</option>
                    </select>

                    <!-- COMMENT -->
                    <label class="text-sm font-medium text-gray-700 mt-4 block">
                        Add a comment to the report:
                    </label>

                    <textarea rows="4" placeholder="Start typing your comment here"
                        class="resize-none w-full border rounded-lg px-3 py-2 text-sm mt-1 focus:outline-none focus:ring-2 focus:ring-gray-400"></textarea>

                    <!-- BUTTONS -->
                    <div class="flex flex-col sm:flex-row sm:justify-end gap-3 mt-6">
                        <button onclick="closeReport()"
                            class="px-5 py-2 border border-black rounded-lg text-sm hover:bg-gray-100">
                            Cancel
                        </button>

                        <button onclick="submitReport()"
                            class="px-5 py-2 bg-blue-900 text-white rounded-lg text-sm hover:bg-blue-800">
                            Submit
                        </button>
                    </div>

                </div>
            </div>

            <!-- THANK YOU MODAL -->
            <div id="thankYouOverlay" class="fixed inset-0 bg-black/40 hidden z-50 flex items-center justify-center">

                <div class="bg-white rounded-2xl w-full max-w-[380px] mx-4 p-6 shadow-xl text-center">

                    <!-- ICON CHECK -->
                    <div class="flex justify-center mb-4">
                        <div
                            class="w-14 h-14 border-2 border-blue-900 rounded-2xl border-8 flex items-center justify-center">
                            <svg class="w-10 h-10 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>

                    <h2 class="text-lg font-bold text-blue-900 mb-2">
                        Thank you
                    </h2>

                    <p class="text-sm text-gray-600 mb-4">
                        Your report has been successfully sent to us<br>
                        We will be verified the problem and notify you<br>
                        back in short notice
                    </p>

                    <p class="text-sm text-gray-600 mb-6">
                        Thank you for your contribution
                    </p>

                    <button onclick="closeThankYou()"
                        class="px-8 py-2 bg-blue-900 text-white rounded-lg text-sm hover:bg-blue-800">
                        Close
                    </button>

                </div>
            </div>

            <!-- APPROVE OVERVIEW MODAL -->
            <div id="approveOverlay" class="fixed inset-0 bg-black/40 hidden z-50 flex items-center justify-center">

                <div class="bg-white rounded-2xl w-full max-w-[620px] mx-4 p-6 shadow-xl relative">

                    <!-- CLOSE -->
                    <button onclick="closeApproveModal()"
                        class="absolute top-4 right-4 text-gray-400 hover:text-black text-xl">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 17.94 6M18 18 6.06 6" />
                        </svg>
                    </button>

                    <!-- TITLE -->
                    <h2 class="text-lg font-bold text-blue-900 mb-1">
                        Overview Solution
                    </h2>

                    <div class="flex items-center gap-3 mb-4">
                        <p class="text-sm text-black pr-7">
                            Solution Draft
                        </p>

                        <p class="text-sm text-black">
                            15 December 2025
                        </p>
                    </div>


                    <!-- CONTENT -->
                    <div class="flex flex-col sm:flex-row gap-4 mb-4">

                        <div class="w-full sm:w-60 rounded-lg overflow-hidden">
                            <img src="article.png" alt="Document" class="w-full sm:w-60 object-contain" />
                            <button class="mt-3 text-xs border border-black px-4 py-1 rounded-md">
                                View Draft
                            </button>
                        </div>

                        <!-- TEXT -->
                        <div>
                            <h3 class="text-xl font-bold text-blue-900 mb-1">
                                Lorem ipsum dolor sit amet
                            </h3>
                            <p class="text-xs text-black leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat.
                            </p>

                        </div>
                    </div>

                    <!-- SUBMITTED -->
                    <div class="border-t border-black pt-4 flex flex-col items-start gap-2 mb-3">
                        <p class="text-xs text-gray-500 mb-3">
                            Submitted By
                        </p>

                        <div class="flex items-center gap-3">
                            <img src="karyawan.png" class="w-20 h-20 sm:w-32 sm:h-32 rounded-full" />

                            <div>
                                <span
                                    class="inline-block bg-blue-900 text-white text-sm px-3 py-1 rounded-bl-lg rounded-tr-lg">
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

                                <div class="mb-5 text-gray-700 w-full">

                                    <!-- Ikon + Nama (sejajar) -->
                                    <div class="flex items-center gap-2 w-full">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M10.915 2.345a2 2 0 0 1 2.17 0l7 4.52A2 2 0 0 1 21 8.544V9.5a1.5 1.5 0 0 1-1.5 1.5H19v6h1a1 1 0 1 1 0 2H4a1 1 0 1 1 0-2h1v-6h-.5A1.5 1.5 0 0 1 3 9.5v-.955a2 2 0 0 1 .915-1.68l7-4.52ZM17 17v-6h-2v6h2Zm-6-6h2v6h-2v-6Zm-2 6v-6H7v6h2Z"
                                                clip-rule="evenodd" />
                                            <path d="M2 21a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Z" />
                                        </svg>
                                        
                                            <p class="font-semibold">Universitas Haluoleo</p>
                                            <a href="#" class="ml-auto text-sm font-semibold text-blue-900">
                                                View Profile
                                            </a>
                                        


                                    </div>

                                </div>

                            </div>
                        </div>



                    </div>

                    <div class="border-t border-black pt-4 flex flex-col items-start gap-3 mb-2">
                        <p class="text-sm mb-3 mt-3">By agreeing to this solution, the talent will be assigned to solve
                            the
                            problem based on the
                            solution presented and notified that the problem will be handled by this talent.</p>
                    </div>

                    <div class="flex justify-end">
                        <button
                            class="px-3 py-1 bg-blue-900 text-white rounded-lg text-sm hover:bg-blue-800 flex items-center gap-1">
                            <span class="relative -translate-y-[1.5px]">Approve Solution</span>
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                        </button>
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
                <script>
                    function openReport() {
                        document.getElementById("reportOverlay").classList.remove("hidden");
                    }

                    function closeReport() {
                        document.getElementById("reportOverlay").classList.add("hidden");
                    }
                </script>

                <script>
                    function submitReport() {
                        // tutup modal report
                        document.getElementById("reportOverlay").classList.add("hidden");

                        // tampilkan modal thank you
                        document.getElementById("thankYouOverlay").classList.remove("hidden");
                    }

                    function closeThankYou() {
                        document.getElementById("thankYouOverlay").classList.add("hidden");
                    }
                </script>

                <script>
                    function openApproveModal() {
                        document.getElementById("approveOverlay").classList.remove("hidden");
                    }

                    function closeApproveModal() {
                        document.getElementById("approveOverlay").classList.add("hidden");
                    }
                </script>


</body>
