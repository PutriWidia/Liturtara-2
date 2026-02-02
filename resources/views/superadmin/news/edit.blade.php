@extends('layout.default')
@section('title', 'Edit News')

@section('content')
@include('layout.navbar_after')

<!-- HERO -->
<section class="w-full bg-gray-50 mt-10">
    <div class="max-w-7xl mx-auto px-6">
        <div class="relative w-full rounded-2xl overflow-hidden shadow-lg">
            <img src="{{ asset('image/Group 770.png') }}" class="w-full h-72 object-cover">
            <div class="absolute bottom-8 left-10">
                <h1 class="text-3xl font-bold text-navy">Edit News</h1>
                <p class="text-gray-700 text-sm mt-2">
                    Perbarui informasi berita
                </p>
            </div>
        </div>
    </div>
</section>

<!-- TAB -->
<section class="bg-white shadow-md -mt-6 relative z-10">
    <div class="max-w-7xl mx-auto px-6">
        <nav class="flex gap-8 py-4 text-sm font-semibold">
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
            <form action="{{ route('superadmin.news.update', $news) }}"
                method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- TITLE -->
                <div class="mb-5">
                    <label class="block text-sm font-semibold mb-1">Title</label>
                    <input type="text" name="title"
                        value="{{ old('title', $news->title) }}"
                        class="w-full px-4 py-2 border rounded-lg" required>
                </div>

                <!-- IMAGE -->
                <div class="mb-5">
                    <label class="block text-sm font-semibold mb-1">Current Image</label>
                    <img src="{{ asset('storage/'.$news->image) }}"
                        class="w-40 h-28 object-cover rounded mb-3">

                    <input type="file" name="image" class="w-full text-sm">
                </div>

                <!-- CONTENT -->
                <div class="mb-5">
                    <label class="block text-sm font-semibold mb-1">Content</label>
                    <textarea name="content" rows="5"
                        class="w-full px-4 py-2 border rounded-lg"
                        required>{{ old('content', $news->content) }}</textarea>
                </div>

                <!-- STATUS -->
                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-1">Status</label>
                    <select name="status" class="w-full px-4 py-2 border rounded-lg">
                        <option value="draft" {{ $news->status === 'draft' ? 'selected' : '' }}>
                            Draft
                        </option>
                        <option value="published" {{ $news->status === 'published' ? 'selected' : '' }}>
                            Published
                        </option>
                    </select>
                </div>

                <!-- BUTTON -->
                <div class="flex justify-end gap-3">
                    <a href="{{ route('superadmin.news.index') }}"
                    class="px-5 py-2 border rounded-lg text-sm">
                        Cancel
                    </a>

                    <button type="submit"
                        class="px-6 py-2 bg-navy text-white rounded-lg text-sm">
                        Update News
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@include('layout.footer')
@endsection
