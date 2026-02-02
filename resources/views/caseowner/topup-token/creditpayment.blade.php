@extends('layout.default')
@section('title', 'Top Up Token')
@section('content')
@include('layout.navbar_after')

<body class="bg-gradient-to-br from-blue-50 to-green-50 min-h-screen py-10">

  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8 px-5">

    <!-- Payment Billing Information -->
    <div>
      <h2 class="text-xl text-blue-900 font-bold mb-4">Payment Billing Information</h2>
      <div class="bg-white shadow-md rounded-xl p-6 space-y-5">
        <div>
          <label class="block text-lg font-semibold mb-1">Name</label>
          <input type="text" placeholder="Nama lengkap" class="w-full border rounded-lg p-2 focus:outline-none" />
        </div>
        <div>
          <label class="block text-lg font-semibold mb-1">Phone Number</label>
          <input type="text" placeholder="Contoh: 08xxxxxxxxxx"
            class="w-full border rounded-lg p-2 focus:outline-none" />
        </div>
      </div>
    </div>

    <!-- Payment Method -->
    <div>
      <h2 class="text-xl text-blue-900 font-bold mb-4">Payment Metode</h2>
      <div class="bg-white shadow-md rounded-xl p-6 space-y-6">

        <div>
          <p class="text-lg font-semibold mb-2">Credit/Debit Card</p>
          <label class="flex items-center gap-2 border rounded-lg p-3 cursor-pointer">
            <input type="radio" name="pay" />
            Credit/Debit Card
          </label>
        </div>

        <div>
          <p class="text-lg font-semibold mb-2">E-Wallet</p>
          <div class="space-y-2">
            <label class="flex items-center gap-2 border rounded-lg p-3 cursor-pointer"><input type="radio" name="pay">
              GoPay</label>
            <label class="flex items-center gap-2 border rounded-lg p-3 cursor-pointer"><input type="radio" name="pay">
              DANA</label>
            <label class="flex items-center gap-2 border rounded-lg p-3 cursor-pointer"><input type="radio" name="pay">
              ShopeePay</label>
            <label class="flex items-center gap-2 border rounded-lg p-3 cursor-pointer"><input type="radio" name="pay">
              OVO</label>
          </div>
        </div>

        <div>
          <p class="text-lg font-semibold mb-2">Bank Transfer</p>
          <div class="space-y-2">
            <label class="flex items-center gap-2 border rounded-lg p-3 cursor-pointer"><input type="radio" name="pay">
              BCA</label>
            <label class="flex items-center gap-2 border rounded-lg p-3 cursor-pointer"><input type="radio" name="pay">
              BNI</label>
            <label class="flex items-center gap-2 border rounded-lg p-3 cursor-pointer"><input type="radio" name="pay">
              Mandiri</label>
            <label class="flex items-center gap-2 border rounded-lg p-3 cursor-pointer"><input type="radio" name="pay">
              BRI</label>
            <label class="flex items-center gap-2 border rounded-lg p-3 cursor-pointer"><input type="radio" name="pay">
              BSI</label>
            <label class="flex items-center gap-2 border rounded-lg p-3 cursor-pointer"><input type="radio" name="pay">
              BTN</label>
          </div>
        </div>

      </div>
    </div>

    <!-- Purchase Detail -->
    <div>
      <h2 class="text-xl text-blue-900 font-bold mb-4">Purchase Detail</h2>
      <div class="bg-white shadow-md rounded-xl p-6 space-y-5">

        <div class="flex justify-between text-lg font-semibold">
          <span>Top up Liturtoken</span>
        </div>

        <div class="space-y-1">
          <div class="flex justify-between text-lg mb-1">
            <span class="font-semibold">10 Token</span>
            <span>Rp. 25.000</span>
          </div>

          <div class="flex justify-between text-lg mb-1">
            <span class="font-semibold">PPN</span>
            <span>Rp. 2.750</span>
          </div>
        </div>

        <hr />

        <div class="flex justify-between text-lg">
          <span class="font-semibold">Total</span>
          <span>Rp. 27.750</span>
        </div>


        <button class="w-full bg-blue-900 text-white text-lg py-2 rounded-lg">Purchase</button>
      </div>
    </div>

  </div>

</body>
@include('layout.footer')
@endsection