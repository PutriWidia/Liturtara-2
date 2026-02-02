@extends('layout.default')
@section('title', 'Top Up Token')
@section('content')
@include('layout.navbar_after')

<body class="bg-gradient-to-br from-blue-50 to-green-50 min-h-screen flex justify-center items-start py-10">
  <div class="w-full max-w-5xl text-center">
    <div class="flex justify-center mb-6">
      <img src="logo 1.png" class="w-16" />
    </div>
    <h2 class="text-2xl sm:text-3xl md:text-4xl text-blue-900 font-bold mb-3">Select the number of tokens that suits your needs.</h2>
    <p class="text-gray-400 w-3/4 mx-auto text-sm sm:text-base">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-10 px-4">
      <div
        class="bg-white rounded-xl shadow-md py-6 sm:py-8 cursor-pointer border-2 border-transparent hover:border-green-600 transition">
        <div
          class="bg-gradient-to-br from-green-100 to-blue-100 w-16 h-16 sm:w-20 sm:h-20 rounded-full flex items-center justify-center shadow-md mx-auto mb-4">
          <img src="logo 2.png" class="w-10" />
        </div>
        <h3 class="text-2xl sm:text-3xl text-blue-900 font-semibold">5</h3>
        <p class="mt-20 text-blue-900 font-semibold">Rp 12.500</p>
      </div>

      <div class="bg-white rounded-xl shadow-md py-6 sm:py-8 cursor-pointer border-2 border-green-600 transition">
        <div
          class="bg-gradient-to-br from-green-100 to-blue-100 w-16 h-16 sm:w-20 sm:h-20 rounded-full flex items-center justify-center shadow-md mx-auto mb-4">
          <img src="logo 2.png" class="w-10" />
        </div>
        <h3 class="text-2xl sm:text-3xl text-blue-900 font-semibold">10</h3>
        <p class="mt-20 text-blue-900 font-semibold">Rp 25.000</p>
      </div>

      <div
        class="bg-white rounded-xl shadow-md py-8 cursor-pointer border-2 border-transparent hover:border-green-600 transition">
        <div
          class="bg-gradient-to-br from-green-100 to-blue-100 w-20 h-20 rounded-full flex items-center justify-center shadow-md mx-auto mb-4">
          <img src="logo 2.png" class="w-10" />
        </div>
        <h3 class="text-2xl sm:text-3xl text-blue-900 font-semibold">20</h3>
        <p class="mt-20 text-blue-900 font-semibold">Rp 50.000</p>
      </div>

      <div
        class="bg-white rounded-xl shadow-md py-8 cursor-pointer border-2 border-transparent hover:border-green-600 transition">
        <div
          class="bg-gradient-to-br from-green-100 to-blue-100 w-20 h-20 rounded-full flex items-center justify-center shadow-md mx-auto mb-4">
          <img src="logo 2.png" class="w-10" />
        </div>
        <h3 class="text-2xl sm:text-3xl text-blue-900 font-semibold">50</h3>
        <p class="mt-20 text-blue-900 font-semibold">Rp 125.000</p>
      </div>


    </div>

    <button class="mt-10 bg-blue-900 text-white px-10 sm:px-20 py-2 rounded-lg text-lg font-medium">Purchase</button>
  </div>
</body>
@include('layout.footer')
@endsection

