@extends('dashboard')

@section('content')

<!-- Navbar -->
<div class="navbar">
    <div class="logo">Hukum Cerdas</div>
    <ul>
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><a href="{{route('infohukum')}}">Info Hukum</a></li>
        <li><a href="{{route('solusi')}}">Solusi</a></li>
        <li><a href="#">Q&A</a></li>
        <li><a href="#">Pro Bono</a></li>
    </ul>
</div>

<!-- Breadcrumb -->
<!-- <div class="breadcrumb">
        <a href="{{ route('dashboard') }}"><span>Home</span></a> >
        <a href="#"><span>Info Hukum</span></a> >
        <span>Pidana</span>
    </div> -->

<!-- Main Content -->
<div class="main-content">

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Kategori</h2>
        <hr>
        <a href="{{ route('katpidana') }}">Pidana</a>
        <hr>
        <a href="{{ route('katperdata') }}">Perdata</a>
        <hr>
        <a href="{{route('katpajak')}}">Pajak & Keuangan</a>
        <hr>
        <a href="{{route('katkerja')}}">Ketenagakerjaan</a>
        <hr>
        <a href="{{route('katham')}}">Hak Asasi Manusia</a>
    </div>



    <!-- Content Area -->
    <div class="content-area">
        <h2>Ketenagakerjaan</h2>

        @foreach($kerjaPosts as $post)
            <div class="post">
                <a href="{{ route('deskkerja', ['id' => $post->id]) }}" class="post-title">{{ $post->judul }}</a>
                <div class="post-meta">{{ $post->created_at->format('d.m.Y') }} . Ham</div>
                <div class="button-group">
                <form action="{{ route('kategori.delete', ['kategori' => $post->id]) }}" method="POST"
                    style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="danger">Hapus</button>
                </form>
                </div>
            </div>
        @endforeach


    </div>

</div>

@endsection

<style>
    /* Global Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #691a20 !important;
        color: white;
    }

    /* Navbar */
    .navbar {
        display: flex;
        justify-content: space-between;
        padding: 20px 50px;
        background-color: #5b1b1b;
    }

    .navbar .logo {
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    .navbar ul {
        list-style-type: none;
        display: flex;
        gap: 20px;
    }

    .navbar ul li {
        display: inline;
    }

    .navbar ul li a {
        color: white;
        text-decoration: none;
        font-size: 18px;
    }

    .navbar ul li a:hover {
        color: #D6C3A5;
    }

    /* Breadcrumb */
    .breadcrumb {
        margin: 20px 50px;
        font-size: 18px;
    }

    .breadcrumb a {
        color: #fff;
        text-decoration: none;
    }

    .breadcrumb span {
        color: #D6C3A5;
    }

    /* Main Layout */
    .main-content {
        display: flex;
        justify-content: space-between;
        padding: 20px 50px;
    }

    /* Sidebar */
    .sidebar {
        width: 25%;
        background-color: #D6C3A5;
        padding: 20px;
        border-radius: 10px;
    }

    .sidebar h2 {
        font-size: 24px;
        color: #5b1b1b;
        margin-bottom: 15px;
    }

    .sidebar a {
        display: block;
        color: #5b1b1b;
        font-size: 18px;
        margin: 10px 0;
        text-decoration: none;
        padding: 5px 0;
    }

    .sidebar a:hover {
        color: #8f4a4a;
    }

    /* Content Area */
    .content-area {
        width: 70%;
    }

    .content-area h2 {
        font-size: 28px;
        color: white;
        margin-bottom: 15px;
    }

    .post {
        margin-bottom: 5px;
        /* Decrease the margin between posts */
        border-bottom: 1px solid #D6C3A5;
        /* Thinner border */
        padding-bottom: 5px;
        /* Decrease the padding below the text */
        min-height: 80px;
        /* Adjust the minimum height to reduce the card length */
    }

    .post-title {
        font-size: 20px;
        color: white;
        font-weight: bold;
        margin-bottom: 5px;
        text-decoration: none;
    }

    .post-meta {
        font-size: 14px;
        color: white;
    }

    .post-title:hover {
        color: #D6C3A5;
    }

    .post {
    position: relative;
    margin-bottom: 10px;
    border-bottom: 1px solid #D6C3A5;
    padding-bottom: 10px;
    min-height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.button-group {
    display: flex;
    gap: 10px;
}

.danger, .edit {
    background-color: #f44336; /* Red for "Hapus" button */
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
}

.edit {
    background-color: #4CAF50; /* Green for "Edit" button */
}

.danger:hover {
    background-color: #d32f2f; /* Darker red on hover */
}

.edit:hover {
    background-color: #388E3C; /* Darker green on hover */
}

</style>