@extends('layout.default')
@section('title', 'Credit Payment')
@section('content')
@include('layout.navbar')

  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- ================= BILLING INFORMATION ================= -->
      <div>
        <h2 class="text-lg font-bold text-[#0B1F5B] mb-4">
          Payment Billing Information
        </h2>

        <div class="bg-white rounded-xl shadow-md p-6 space-y-4">
          <div>
            <label class="text-sm font-medium text-gray-700">Name</label>
            <input
              type="text"
              placeholder="Nama lengkap"
              class="mt-1 w-full rounded-lg border border-gray-300 px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#0B1F5B]"
            >
          </div>

          <div>
            <label class="text-sm font-medium text-gray-700">Phone Number</label>
            <input
              type="text"
              placeholder="Contoh: 08xxxxxxxxxx"
              class="mt-1 w-full rounded-lg border border-gray-300 px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#0B1F5B]"
            >
          </div>
        </div>
      </div>

      <!-- ================= PAYMENT METHOD ================= -->
      <div>
        <h2 class="text-lg font-bold text-[#0B1F5B] mb-4">
          Payment Metode
        </h2>

        <div class="bg-white rounded-xl shadow-md p-6 space-y-5">

          <!-- Credit Card -->
          <div>
            <p class="text-sm font-semibold mb-2">Credit/Debit Card</p>
          </div>

          <!-- E-Wallet -->
          <div class="space-y-2">
            <label class="flex items-center gap-3 border rounded-lg px-4 py-2 cursor-pointer">
              <input type="radio" name="payment" class="accent-[#0B1F5B]">
              <span class="text-sm">Credit/Debit Card</span>
            </label>
            <label class="flex items-center gap-3 border rounded-lg px-4 py-2 cursor-pointer">
              <input type="radio" name="payment" class="accent-[#0B1F5B]">
              <span class="text-sm">GoPay</span>
            </label>
            <label class="flex items-center gap-3 border rounded-lg px-4 py-2 cursor-pointer">
              <input type="radio" name="payment" class="accent-[#0B1F5B]">
              <span class="text-sm">DANA</span>
            </label>
            <label class="flex items-center gap-3 border rounded-lg px-4 py-2 cursor-pointer">
              <input type="radio" name="payment" class="accent-[#0B1F5B]">
              <span class="text-sm">ShopeePay</span>
            </label>
            <label class="flex items-center gap-3 border rounded-lg px-4 py-2 cursor-pointer">
              <input type="radio" name="payment" class="accent-[#0B1F5B]">
              <span class="text-sm">OVO</span>
            </label>
          </div>

          <!-- Bank Transfer -->
          <div>
            <p class="text-sm font-semibold mb-2">Bank Transfer</p>
            <div class="space-y-2">
              <label class="flex items-center gap-3 border rounded-lg px-4 py-2 cursor-pointer">
                <input type="radio" name="payment" class="accent-[#0B1F5B]">
                <span class="text-sm">BCA</span>
              </label>
              <label class="flex items-center gap-3 border rounded-lg px-4 py-2 cursor-pointer">
                <input type="radio" name="payment" class="accent-[#0B1F5B]">
                <span class="text-sm">BNI</span>
              </label>
              <label class="flex items-center gap-3 border rounded-lg px-4 py-2 cursor-pointer">
                <input type="radio" name="payment" class="accent-[#0B1F5B]">
                <span class="text-sm">Mandiri</span>
              </label>
              <label class="flex items-center gap-3 border rounded-lg px-4 py-2 cursor-pointer">
                <input type="radio" name="payment" class="accent-[#0B1F5B]">
                <span class="text-sm">BRI</span>
              </label>
              <label class="flex items-center gap-3 border rounded-lg px-4 py-2 cursor-pointer">
                <input type="radio" name="payment" class="accent-[#0B1F5B]">
                <span class="text-sm">BSI</span>
              </label>
              <label class="flex items-center gap-3 border rounded-lg px-4 py-2 cursor-pointer">
                <input type="radio" name="payment" class="accent-[#0B1F5B]">
                <span class="text-sm">BTN</span>
              </label>
            </div>
          </div>

        </div>
      </div>

      <!-- ================= PURCHASE DETAIL ================= -->
      <div>
        <h2 class="text-lg font-bold text-[#0B1F5B] mb-4">
          Purchase Detail
        </h2>

        <div class="bg-white rounded-xl shadow-md p-6 space-y-4">
          <p class="text-xl font-semibold">Top up Liturtoken</p>

          <div class="flex justify-between text-sm">
            <span class="font-semibold">10 Token</span>
            <span class="text-gray-700">Rp. 25.000</span>
          </div>

          <div class="flex justify-between text-sm">
            <span class="font-semibold">PPN 11%</span>
            <span class="text-gray-700">Rp. 2.750</span>
          </div>

          <hr>

          <div class="flex justify-between text-sm">
            <span class="font-semibold">Total</span>
            <span class="text-gray-700">Rp. 27.750</span>
          </div>

          <button class="mt-4 w-full bg-[#0B1F5B] text-white py-3 rounded-lg font-medium hover:bg-[#081947] transition">
            Purchase
          </button>
        </div>
      </div>

    </div>
  </div>

@include('layout.contact')
@include('layout.footer')
@endsection