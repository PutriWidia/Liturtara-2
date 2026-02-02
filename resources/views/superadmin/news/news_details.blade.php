@extends('layout.default')
@section('title', $news->title)

@section('content')
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-6 md:px-12">
    <div class="bg-white shadow rounded-lg p-6">
      <img src="{{ asset('storage/' . $news->image) }}" 
           alt="{{ $news->title }}" 
           class="w-full h-80 object-cover rounded-lg mb-6">

      <h1 class="text-3xl font-bold mb-4 text-gray-800">{{ $news->title }}</h1>
      <p class="text-gray-600 leading-relaxed whitespace-pre-line">{{ $news->content }}</p>

      <div class="mt-10">
        <a href="{{ route('homepage') }}" class="text-blue-600 hover:underline">
          ← Back to Homepage
        </a>
      </div>
    </div>
  </div>
</section>

@include('layout.footer')
@endsection
