@extends('layout.default')
@section('title', 'Token Debit')
@section('content')
@include('layout.navbar')

  <div class="max-w-7xl mx-auto px-6 py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- ================= LEFT CARD ================= -->
      <div>
        <h2 class="font-bold mb-4 text-[#0C295F]">Redeem Token Point</h2>
        <div class="bg-white rounded-xl shadow p-6">
          <p class="text-lg font-semibold">Rp.150.000</p>

          <hr class="my-2">

          <div class="flex items-center gap-2 mt-3 text-sm text-gray-500">
            <span class="flex items-center gap-2 text-emerald-600 text-xs font-medium">
                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-emerald-100">
                    <img src="logo.png" alt="Point" class="w-3.5 h-3.5">
                </span>
                150 point
            </span>

          </div>
        </div>
      </div>

      <!-- ================= MIDDLE CARD ================= -->
      <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

      <div>
        <h2 class="font-semibold mb-4">Redeem Metode</h2>

        <div class="bg-white rounded-xl shadow p-6 space-y-6"
             x-data="{ activeMethod: '' }">

          <p class="text-sm font-semibold">Bank</p>

          <!-- ===== BCA ===== -->
          <div class="border rounded-xl">
            <label class="flex items-center gap-2 p-3 cursor-pointer">
              <input type="radio" name="method" value="bca" x-model="activeMethod">
              BCA
            </label>

            <div x-show="activeMethod === 'bca'" x-transition
                 class="px-4 pb-4 space-y-3">
              <div class="grid grid-cols-3 gap-3">
                <input type="text" placeholder="Card Number" class="border rounded-md px-3 py-2 text-xs">
                <input type="text" placeholder="Expiry Date" class="border rounded-md px-3 py-2 text-xs">
                <input type="text" placeholder="CVV / CVC" class="border rounded-md px-3 py-2 text-xs">
              </div>

              <!-- LOGO -->
              <div class="flex items-center gap-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" class="h-5">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" class="h-5">
              </div>
            </div>
          </div>

          <!-- ===== BNI ===== -->
          <div class="border rounded-xl">
            <label class="flex items-center gap-2 p-3 cursor-pointer">
              <input type="radio" name="method" value="bni" x-model="activeMethod">
              BNI
            </label>

            <div x-show="activeMethod === 'bni'" x-transition
                 class="px-4 pb-4 space-y-3">
              <div class="grid grid-cols-3 gap-3">
                <input type="text" placeholder="Card Number" class="border rounded-md px-3 py-2 text-xs">
                <input type="text" placeholder="Expiry Date" class="border rounded-md px-3 py-2 text-xs">
                <input type="text" placeholder="CVV / CVC" class="border rounded-md px-3 py-2 text-xs">
              </div>

              <div class="flex items-center gap-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" class="h-5">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" class="h-5">
              </div>
            </div>
          </div>

          <!-- ===== Mandiri ===== -->
          <div class="border rounded-xl">
            <label class="flex items-center gap-2 p-3 cursor-pointer">
              <input type="radio" name="method" value="mandiri" x-model="activeMethod">
              Mandiri
            </label>

            <div x-show="activeMethod === 'mandiri'" x-transition
                 class="px-4 pb-4 space-y-3">
              <div class="grid grid-cols-3 gap-3">
                <input type="text" placeholder="Card Number" class="border rounded-md px-3 py-2 text-xs">
                <input type="text" placeholder="Expiry Date" class="border rounded-md px-3 py-2 text-xs">
                <input type="text" placeholder="CVV / CVC" class="border rounded-md px-3 py-2 text-xs">
              </div>

              <div class="flex items-center gap-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" class="h-5">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" class="h-5">
              </div>
            </div>
          </div>

          <!-- ===== BRI ===== -->
          <div class="border rounded-xl">
            <label class="flex items-center gap-2 p-3 cursor-pointer">
              <input type="radio" name="method" value="bri" x-model="activeMethod">
              BRI
            </label>

            <div x-show="activeMethod === 'bri'" x-transition
                 class="px-4 pb-4 space-y-3">
              <div class="grid grid-cols-3 gap-3">
                <input type="text" placeholder="Card Number" class="border rounded-md px-3 py-2 text-xs">
                <input type="text" placeholder="Expiry Date" class="border rounded-md px-3 py-2 text-xs">
                <input type="text" placeholder="CVV / CVC" class="border rounded-md px-3 py-2 text-xs">
              </div>

              <div class="flex items-center gap-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" class="h-5">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" class="h-5">
              </div>
            </div>
          </div>

          <!-- ================= E-WALLET ================= -->
          <p class="text-sm font-semibold mt-2">E-Wallet</p>

          <div class="border rounded-xl" x-data>
            <label class="flex items-center gap-2 p-3 cursor-pointer">
              <input type="radio" name="method" value="gopay" x-model="activeMethod">
              GoPay
            </label>

            <div x-show="activeMethod === 'gopay'" x-transition
                 class="px-4 pb-4">
              <input type="text" placeholder="Nomor GoPay"
                class="border rounded-md px-3 py-2 text-xs w-full">
               <input type="text" placeholder="Username Account"
                class="border rounded-md px-3 py-2 text-xs w-full"> 
            </div>
          </div>

          <!-- DANA -->
          <div class="border rounded-xl">
            <label class="flex items-center gap-2 p-3 cursor-pointer">
              <input type="radio" name="method" value="dana" x-model="activeMethod">
              DANA
            </label>

            <div x-show="activeMethod === 'dana'" x-transition
                 class="px-4 pb-4">
            <input type="text" placeholder="Nomor DANA"
                class="border rounded-md px-3 py-2 text-xs w-full">
            <input type="text" placeholder="Username Account"
                class="border rounded-md px-3 py-2 text-xs w-full">
            </div>
          </div>

          <!-- ShopeePay -->
          <div class="border rounded-xl">
            <label class="flex items-center gap-2 p-3 cursor-pointer">
              <input type="radio" name="method" value="shopeepay" x-model="activeMethod">
              ShopeePay
            </label>

            <div x-show="activeMethod === 'shopeepay'" x-transition
                 class="px-4 pb-4">
            <input type="text" placeholder="Nomor ShopeePay"
                class="border rounded-md px-3 py-2 text-xs w-full">
            <input type="text" placeholder="Username Account"
                class="border rounded-md px-3 py-2 text-xs w-full">
            </div>
          </div>

          <!-- OVO -->
          <div class="border rounded-xl">
            <label class="flex items-center gap-2 p-3 cursor-pointer">
              <input type="radio" name="method" value="ovo" x-model="activeMethod">
              OVO
            </label>

            <div x-show="activeMethod === 'ovo'" x-transition
                 class="px-4 pb-4">
            <input type="text" placeholder="Nomor OVO"
                class="border rounded-md px-3 py-2 text-xs w-full">
            <input type="text" placeholder="Username Account"
                class="border rounded-md px-3 py-2 text-xs w-full">
            </div>
          </div>

        </div>
      </div>

      <!-- ================= RIGHT CARD ================= -->
      <div>
        <h2 class="font-bold mb-4 text-[#0C295F]">Redeem Detail</h2>

        <div class="bg-white rounded-xl shadow p-6 space-y-4">
          <p class="font-medium">Liturtoken</p>

          <div class="flex justify-between text-sm">
            <span>Rp. 150.000</span>
            <span class="flex items-center gap-2 text-xs">
                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-emerald-100">
                    <img src="logo.png" alt="Point" class="w-3.5 h-3.5">
                </span>
                150 point
            </span>
        </div>
        <hr>

          <div class="flex justify-between text-sm font-medium">
            <span>Redeem</span>
            <span>Rp. 150.000</span>
          </div>

          <div class="flex justify-end">
            <span class="flex items-center gap-2 text-red-500 text-xs">
                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-emerald-100">
                    <img src="logo.png" alt="Point" class="w-3.5 h-3.5">
                </span>
                -150 point
            </span>
        
        </div>

          <button class="w-full bg-[#0B1D4D] text-white py-3 rounded-lg font-semibold hover:bg-[#09173c] transition">
            Redeem
          </button>
        </div>
      </div>

    </div>
  </div>

@include('layout.contact')
@include('layout.footer')
@endsection

