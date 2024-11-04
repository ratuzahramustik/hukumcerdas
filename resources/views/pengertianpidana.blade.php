@extends('dashboard')

@section('content')

<!-- Navbar -->
<div class="navbar">
        <div class="logo">Hukum Cerdas</div>
        <ul>
            <li><a href="{{route('dashboard')}}">Home</a></li>
            <li><a href="{{route('infohukum')}}">Info Hukum</a></li>
            <li><a href="#">Solusi</a></li>
            <li><a href="#">Q&A</a></li>
            <li><a href="#">Pro Bono</a></li>
        </ul>
    </div>

    <!-- Breadcrumb -->
    <!-- <div class="breadcrumb">
        <a href="{{ route('dashboard') }}"><span>Home</span></a> >
        <a href="{{ route('infohukum') }}"><span>Info Hukum</span></a>
    </div> -->

    <!-- Main Content -->
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Kategori</h3>
            <ul>
                <li><a href="#">Pidana</a></li>
                <li><a href="#">Perdata</a></li>
                <li><a href="#">Pajak & Keuangan</a></li>
                <li><a href="#">Ketenagakerjaan</a></li>
                <li><a href="#">Hak Asasi Manusia</a></li>
            </ul>
        </div>

        <!-- Content -->
        <div class="content">
    <div class="card">
        <h2>Hukum Hak Asasi Manusia (HAM)</h2>
        <p>Hukum Hak Asasi Manusia mengatur hak-hak dasar yang dimiliki setiap manusia sejak lahir, seperti hak hidup, kebebasan berpendapat, hak untuk bebas dari penyiksaan, dan hak atas perlindungan hukum. Tujuannya adalah untuk melindungi martabat dan kesejahteraan individu, memastikan bahwa setiap orang diperlakukan dengan adil dan setara di mata hukum, tanpa diskriminasi.</p>
    </div>
</div>

@endsection

<style>
/* Reset margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Base styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #581B1B;
    color: white;
    min-height: 100vh;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    padding: 20px 50px;
    background-color: #581B1B;
    align-items: center;
}

.navbar .logo {
    font-size: 24px;
    font-weight: bold;
    color: white;
}

.navbar ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

.navbar ul li a {
    text-decoration: none;
    color: white;
    font-size: 18px;
}

.navbar ul li a:hover {
    color: #D6C3A5;
}

/* Breadcrumb */
/* .breadcrumb {
    padding: 20px 50px;
    font-size: 18px;
    background-color: #7E1C1C;
} */

.breadcrumb a {
    text-decoration: none;
    color: white;
}

.breadcrumb a:hover {
    color: #D6C3A5;
}

/* Main container */
.container {
    display: flex;
    padding: 40px 50px;
}

/* Sidebar */
.sidebar {
    width: 25%;
    padding-right: 20px;
}

.sidebar h3 {
    font-size: 22px;
    margin-bottom: 20px;
    color: #F1E1CE;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    margin-bottom: 15px;
}

.sidebar ul li a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    padding-bottom: 10px;
    border-bottom: 1px solid #D6C3A5;
}

.sidebar ul li a:hover {
    color: #D6C3A5;
}

/* Content with card */
.content {
    width: 75%;
    padding: 30px;
}

.card {
    background-color: #7E1C1C;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
}

.card h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.card p {
    font-size: 18px;
    line-height: 1.6;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .sidebar,
    .content {
        width: 100%;
    }
}


    </style>
