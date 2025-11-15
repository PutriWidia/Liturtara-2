@extends('layout.default')

@section('title', 'Hubungi Kami | Liturtara')

@include('layout.navbar')

@section('content')
    <!-- Profil Liturtara -->
    <section class="fade-in-section w-full px-6 py-20">
        <div class="max-w-6xl mx-auto">
        <div class="rounded-2xl overflow-hidden shadow-lg">
            <div class="relative">
            <img 
                src="image/contactus.png" 
                alt="Profil Liturtara" 
                class="w-full h-80 object-cover"
            />
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-white/90 to-transparent p-6">
            <h3 class="text-2xl md:text-4xl font-bold text-[#0a2e5c]">Konsultasikan Bisnis</h3>
            <h3 class="text-2xl md:text-4xl font-bold text-[#0a2e5c]">Anda dengan Kami</h3>
                <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    {{-- Form Section --}}
    <section class="bg-gray-50 py-16 px-6">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-semibold text-center mb-8">Hubungi Kami</h2>

            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" placeholder="Nama lengkap"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Handphone</label>
                        <input type="text" name="phone" placeholder="Contoh: 08xxxxxxxxxx"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" placeholder="Alamat email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Perusahaan</label>
                    <input type="text" name="company" placeholder="Contoh: PT. Nama Anda"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Pesan Untuk Kami</label>
                    <textarea name="message" rows="4" placeholder="Tulis pesan anda..."
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                </div>

                <div class="flex items-center space-x-2">
                    <input id="agreement" type="checkbox" required class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <label for="agreement" class="text-sm text-gray-600">Saya bersedia untuk menerima email atau panggilan terkait layanan ini.</label>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="px-8 py-3 bg-blue-900 hover:bg-blue-800 text-white font-semibold rounded-lg transition">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </section>

@include('layout.footer')
@endsection
