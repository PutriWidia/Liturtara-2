@extends('layout.default')

@section('content')
<div class="container mx-auto px-6 py-8">

    <h1 class="text-2xl font-bold mb-6">Approve Reviewer</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
       @foreach($reviewers as $r)
        <div class="card">
            <h3>{{ $review->reviewer->email }}</h3>
            <p>Status: {{ ucfirst($r->status) }}</p>

            <form method="POST" action="{{ route('superadmin.reviewer.approve', $r->id) }}">
                @csrf
                <button class="btn btn-success">Approve</button>
            </form>

            <form method="POST" action="{{ route('superadmin.reviewer.reject', $r->id) }}">
                @csrf
                <button class="btn btn-danger">Reject</button>
            </form>
        </div>
        @endforeach
    </div>

</div>
@endsection
