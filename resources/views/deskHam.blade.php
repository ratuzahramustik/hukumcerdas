@extends('dashboard')

@section('content')
    <!-- Menampilkan deskripsi dari post pidana -->
    <h2>{{ $hamPosts->judul }}</h2> <!-- Menampilkan judul -->
    <p>{{ $hamPosts->deskripsi }}</p> <!-- Menampilkan deskripsi -->
@endsection