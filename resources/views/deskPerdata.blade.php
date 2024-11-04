@extends('dashboard')

@section('content')
    <!-- Menampilkan deskripsi dari post pidana -->
    <h2>{{ $perdataPosts->judul }}</h2> <!-- Menampilkan judul -->
    <p>{{ $perdataPosts->deskripsi }}</p> <!-- Menampilkan deskripsi -->
@endsection