<!-- <!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita</title>
</head>
<body>
    <h2>Tambah Berita</h2>

    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Judul</label><br>
            <input type="text" name="title" required>
        </div>

        <div>
            <label>Gambar</label><br>
            <input type="file" name="image" accept="image/*" required>
        </div>

        <div>
            <label>Konten</label><br>
            <textarea name="content" rows="5" required></textarea>
        </div>

        <button type="submit">Simpan</button>
        <a href="{{ route('news.show') }}">Batal</a>
    </form>
</body>
</html> -->
@extends('layout.default')
@section('title', 'Tambah News')

@section('content')
@include('layout.navbar_after')

<!-- HERO -->
<section class="w-full bg-gray-50 mt-10">
    <div class="max-w-7xl mx-auto px-6">
        <div class="relative w-full rounded-2xl overflow-hidden shadow-lg">
            <img src="{{ asset('image/Group 770.png') }}"
                class="w-full h-72 object-cover">

            <div class="absolute bottom-8 left-10">
                <h1 class="text-3xl font-bold text-navy">Tambah News</h1>
                <p class="text-gray-700 text-sm mt-2">
                    Buat berita baru untuk ditampilkan di website
                </p>
            </div>
        </div>
    </div>
</section>

<!-- TAB MENU -->
<section class="bg-white shadow-md -mt-6 relative z-10">
    <div class="max-w-7xl mx-auto px-6">
        <nav class="flex gap-8 py-4 text-sm font-semibold">
            <a href="{{ route('superadmin.dashboard') }}" class="text-gray-500 hover:text-navy">Dashboard</a>

            <a href="{{ route('superadmin.news.index') }}"
               class="text-navy border-b-2 border-navy pb-2">
                News
            </a>
        </nav>
    </div>
</section>

<!-- FORM -->
<section class="bg-gray-50 py-10">
    <div class="max-w-4xl mx-auto px-6">
        <div class="bg-white rounded-xl shadow-md p-8">

            <form action="{{ route('superadmin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- TITLE -->
                <div class="mb-5">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Judul News
                    </label>
                    <input type="text" name="title"
                        class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-navy/30"
                        placeholder="Masukkan judul berita"
                        required>
                </div>

                <!-- IMAGE -->
                <div class="mb-5">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Gambar
                    </label>
                    <input type="file" name="image"
                        class="w-full border rounded-lg px-4 py-2"
                        required>
                </div>

                <!-- CONTENT -->
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Konten
                    </label>
                    <textarea name="content" rows="6"
                        class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-navy/30"
                        placeholder="Isi berita..."
                        required></textarea>
                </div>

                <!-- ACTION -->
                <div class="flex justify-end gap-4">
                    <a href="{{ route('superadmin.news.index') }}"
                       class="px-5 py-2 rounded-md border text-gray-600 hover:bg-gray-100">
                        Batal
                    </a>

                    <button type="submit"
                        class="px-6 py-2 rounded-md bg-navy text-white hover:bg-blue-800">
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>
</section>

@include('layout.footer')
@endsection
