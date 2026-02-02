@extends('layout.default')
@section('title', 'Docs Detail')
@section('content')
@include('layout.navbar_after')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project Draft</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen">

    <div class="max-w-7xl mx-auto px-6 py-10">
        <!-- Title -->
        <div class="border-b border-black flex items-center justify-between mb-8">
            <div>
                <h1 class="text-2xl font-bold text-blue-900">
                    Ut enim ad minim veniam
                </h1>
                <p class="text-sm font-semibold text-blue-900 mb-2">Project Draft</p>
            </div>

            <a href="#" class="text-sm text-blue-900 font-semibold hover:underline flex items-center gap-1">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
                <span class="relative -top-0.5">Back</span>
            </a>
        </div>

        <!-- Content -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            <!-- LEFT FORM -->
            <div class="lg:col-span-3 space-y-6">

                <!-- Title -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Title (Required)
                    </label>
                    <input type="text"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-300" />
                </div>

                <!-- Abstract (LEBIH TINGGI) -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Abstract
                    </label>
                    <textarea class="w-full min-h-[200px] border border-gray-300 rounded-md px-4 py-2
           focus:outline-none focus:ring-2 focus:ring-gray-300"></textarea>
                </div>

                <!-- Background (NORMAL) -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Background
                    </label>
                    <textarea rows="4" class="w-full border border-gray-300 rounded-md px-4 py-2
           focus:outline-none focus:ring-2 focus:ring-gray-300"></textarea>
                </div>

                <!-- Content (NORMAL) -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Content
                    </label>
                    <textarea rows="4" class="w-full border border-gray-300 rounded-md px-4 py-2
           focus:outline-none focus:ring-2 focus:ring-gray-300"></textarea>
                </div>


                <!-- Add Section -->
                <button class="text-sm text-black hover:underline">
                    + Add Section
                </button>

            </div>

            <!-- RIGHT SIDEBAR -->
            <div class="space-y-6 lg:space-y-4">



                <!-- Box -->
                <div class="space-y-2">
                    <p class="text-sm font-medium text-gray-700">Action</p>

                    <div class="border border-gray-300 rounded-md bg-white">
                        <button
                            class="w-full text-left px-4 py-2 text-sm hover:bg-gray-50 flex justify-between items-center">
                            Revision Version
                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778" />
                            </svg>
                        </button>
                    </div>
                </div>



                <!-- Metadata -->
                <div class="border border-gray-300 rounded-md bg-white p-4 text-sm space-y-2">
                    <p><span class="font-medium">Metadata</span></p>
                    <p class="flex justify-between"><span>Title</span><span>Draft1.txt</span></p>
                    <p class="flex justify-between"><span>Word Count</span><span>303</span></p>
                    <p class="flex justify-between"><span>Revision</span><span>2</span></p>
                    <div class="flex items-center gap-1 ">
                        <svg class="w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                d="M4 5a1 1 0 0 1 1-1h11.586a1 1 0 0 1 .707.293l2.414 2.414a1 1 0 0 1 .293.707V19a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5Z" />
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                d="M8 4h8v4H8V4Zm7 10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                        <svg class="w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z" />
                        </svg>

                        <svg class="w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                        </svg>
                    </div>
                </div>

                <!-- Font -->
                <div class="border border-gray-300 rounded-md bg-white p-4 space-y-3">

                    <div class="flex flex-col sm:flex-row gap-2">
                        <select class="border px-2 py-1 text-sm rounded">
                            <option>Calibri</option>
                            <option>Arial</option>
                            <option>Times New Roman</option>
                        </select>
                        <select class="border px-2 py-1 text-sm rounded">
                            <option>24</option>
                            <option>18</option>
                            <option>16</option>
                        </select>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-2">
                        <button class="border px-2 py-1 text-sm font-bold">B</button>
                        <button class="border px-2 py-1 text-sm italic">I</button>
                        <button class="border px-2 py-1 text-sm underline">U</button>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-2">
                    <button
                        class="flex-1 flex items-center justify-center gap-2 border border-blue-900 text-blue-900 rounded-md py-2 text-sm hover:bg-blue-50">
                        Ajukan Solusi
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2M12 4v12m0-12 4 4m-4-4L8 8" />
                        </svg>
                    </button>

                    <button
                        class="flex-1 flex items-center justify-center bg-blue-900 text-white rounded-md py-2 text-sm hover:bg-blue-700">
                        Chat
                    </button>
                </div>


            </div>
        </div>
    </div>

</body>
@include('layout.footer')
@endsection