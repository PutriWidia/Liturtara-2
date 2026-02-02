@extends('layout.default')

@section('content')
@include('layout.navbar_after')

@include('superadmin.partials.hero')
@include('superadmin.partials.tabs')

<section class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-6">
        @yield('page-content')
    </div>
</section>

@include('layout.footer')
@endsection
