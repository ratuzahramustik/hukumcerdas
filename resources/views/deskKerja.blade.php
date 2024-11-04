@extends('dashboard')

@section('content')
    <!-- Menampilkan deskripsi dari post pidana -->
    <h2>{{ $kerjaPosts->judul }}</h2> <!-- Menampilkan judul -->
    <p>{{ $kerjaPosts->deskripsi }}</p> <!-- Menampilkan deskripsi -->
@endsection