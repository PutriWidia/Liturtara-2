@extends('layouts.superadmin')

@section('content')
<h3>Detail Reviewer</h3>

<div class="card p-4">

    <h4>{{ $application->user->name }}</h4>

    <p><b>Kategori:</b> {{ $application->category }}</p>
    <p><b>Wilayah:</b> {{ $application->region }}</p>
    <p><b>Alasan:</b><br> {{ $application->application_text }}</p>

    <div class="mt-3 d-flex gap-2">

        {{-- Approve --}}
        <form action="{{ route('reviewers.approve', $application->id) }}" method="POST">
            @csrf
            <button class="btn btn-success">Approve</button>
        </form>

        {{-- Reject --}}
        <form action="{{ route('reviewers.reject', $application->id) }}" method="POST">
            @csrf
            <button class="btn btn-danger">Reject</button>
        </form>

    </div>

</div>
@endsection
