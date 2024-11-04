@extends('dashboard')

@section('content')
    <!-- Menampilkan deskripsi dari post pidana -->
    <h2>{{ $pajakPosts->judul }}</h2> <!-- Menampilkan judul -->
    <p>{{ $pajakPosts->deskripsi }}</p> <!-- Menampilkan deskripsi -->
@endsection