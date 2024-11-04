@extends('dashboard')

@section('content')
    <!-- Menampilkan deskripsi dari post pidana -->
    <h2>{{ $pidanaPost->judul }}</h2> <!-- Menampilkan judul -->
    <p>{{ $pidanaPost->deskripsi }}</p> <!-- Menampilkan deskripsi -->
@endsection