@extends('dashboard')

@section('content')
<!-- Navbar -->
<div class="navbar">
    <div class="logo">Hukum Cerdas</div>
    <ul>
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('infohukum') }}">Info Hukum</a></li>
        <li><a href="{{ route('solusi') }}">Solusi</a></li>
        <li><a href="{{route('question')}}">Q&A</a></li>
        <li><a href="{{route('pro')}}">Pro Bono</a></li>
    </ul>
</div>

<!-- Breadcrumb -->
<!-- <div class="breadcrumb">
        <a href="{{ route('dashboard') }}"><span>Home</span></a> >
        <a href="{{ route('infohukum') }}"><span>Info Hukum</span></a>
    </div> -->

<div class="main-content">
    <!-- Add Category Button -->
    <div class="add-category">
        <a href="{{ route('kategori.create') }}" class="btn-add-category">+ Tambah Kategori</a>
    </div>
</div>

<!-- Content Section -->
<div class="content">
    <!-- Sidebar Category -->
    <div class="sidebar">
        <h2>Kategori</h2>
        <hr>
        <a href="{{ route('katpidana') }}">Pidana</a>
        <hr>
        <a href="{{ route('katperdata') }}">Perdata</a>
        <hr>
        <a href="{{ route('katpajak')}}">Pajak & Keuangan</a>
        <hr>
        <a href="{{route('katkerja')}}">Ketenagakerjaan</a>
        <hr>
        <a href="{{route('katham')}}">Hak Asasi Manusia</a>
    </div>


    <!-- Card Grid -->
    <div class="card-grid">
        <a href="{{ route('pengertianpidana') }}">
            <div class="card">
                <div class="icon">⚖️</div>
                <h3>Pidana</h3>
                <p>Hukum pidana mengatur perbuatan yang dianggap sebagai kejahatan atau pelanggaran terhadap masyarakat
                    atau negara, seperti pencurian, penipuan, atau kekerasan.</p>
            </div>
        </a>
        <a href="{{ route('pengertianperdata') }}">
            <div class="card">
                <div class="icon">📄</div>
                <h3>Perdata</h3>
                <p>Hukum perdata mengatur hak dan kewajiban antar individu atau pihak dalam urusan pribadi.</p>
            </div>
        </a>
        <a href="{{ route('pengertianpajakdankeuangan') }}">
            <div class="card">
                <div class="icon">💰</div>
                <h3>Pajak & Keuangan</h3>
                <p>Hukum pajak mengatur kewajiban setiap warga negara dan badan usaha untuk membayar pajak kepada
                    pemerintah, seperti pajak penghasilan, pajak perusahaan.</p>
            </div>
        </a>
        <a href="{{ route('pengertianketenagakerjaan') }}">
            <div class="card">
                <div class="icon">💼</div>
                <h3>Ketenagakerjaan</h3>
                <p>Hukum ketenagakerjaan mengatur hubungan antara pekerja dan pemberi kerja, termasuk hak dan kewajiban
                    di tempat kerja.</p>
            </div>
        </a>
        <a href="{{ route('pengertianham') }}">
            <div class="card">
                <div class="icon">🧑‍⚖️</div>
                <h3>Hak Asasi Manusia</h3>
                <p>HAM adalah hak-hak dasar yang dimiliki setiap manusia sejak lahir, seperti hak hidup, kebebasan
                    berpendapat.</p>
            </div>
        </a>
    </div>
</div>
@endsection

<style>
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
        align-items: center;
        padding: 20px 50px;
        background-color: transparent;
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
        color: white;
    }

    .breadcrumb span {
        color: #D6C3A5;
    }

    /* Content Layout */
    .content {
        display: flex;
        justify-content: space-between;
        padding: 20px 50px;
    }

    /* Sidebar Category */
    .sidebar {
        width: 25%;
        background-color: #D6C3A5;
        padding: 20px;
        border-radius: 15px;
    }

    .sidebar h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #5b1b1b;
    }

    .sidebar hr {
        border-color: #5b1b1b;
    }

    .sidebar a {
        display: block;
        margin: 10px 0;
        color: #5b1b1b;
        font-size: 18px;
        transition: color 0.3s;
        text-decoration: none;
    }

    .sidebar a:hover {
        color: #8f4a4a;
    }

    /*button add*/
    .btn-add-category {
        display: inline-block;
        /* Agar menjadi tombol inline */
        background-color: #D6C3A5;
        /* Warna latar belakang */
        color: #5b1b1b;
        /* Warna teks */
        padding: 10px 20px;
        /* Jarak dalam tombol */
        border-radius: 5px;
        /* Sudut membulat */
        font-size: 18px;
        /* Ukuran font */
        text-decoration: none;
        /* Menghapus garis bawah */
        transition: background-color 0.3s, color 0.3s;
        /* Efek transisi */
    }

    .btn-add-category:hover {
        background-color: #5b1b1b;
        /* Warna latar belakang saat hover */
        color: #D6C3A5;
        /* Warna teks saat hover */
    }

    /* Card Grid */
    .card-grid {
        width: 70%;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .card {
        background-color: #a34949;
        padding: 20px;
        border-radius: 15px;
        color: white;
        text-align: center;
        transition: background-color 0.3s;
        text-decoration: none;
    }


    .card h3 {
        margin-bottom: 10px;
        font-size: 24px;
    }

    .card p {
        font-size: 16px;
    }

    .card:hover {
        background-color: #813636;
    }

    /* Icon Styling */
    .card .icon {
        font-size: 40px;
        margin-bottom: 15px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .content {
            flex-direction: column;
        }

        .sidebar {
            width: 100%;
            margin-bottom: 20px;
        }

        .card-grid {
            grid-template-columns: 1fr;
        }
    }
</style>