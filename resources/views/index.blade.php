<!-- resources/views/jobs/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lowongan Kerja</h1>
    <ul>
        @foreach($jobs as $job)
            <li>
                <h2>{{ $job->title }}</h2>
                <p>{{ $job->description }}</p>
                <p>Lokasi: {{ $job->location }}</p>
                <p>Tanggal Berakhir: {{ $job->closing_date }}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection
