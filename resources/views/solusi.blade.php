@extends('dashboard')

@section('content')

<!-- Navbar -->
<div class="navbar">
        <div class="logo">Hukum Cerdas</div>
        <ul>
            <li><a href="{{ route('dashboard') }}">Home</a></li>
            <li><a href="{{ route('infohukum') }}">Info Hukum</a></li>
            <li>
                <a href="#">Solusi</a>
                <!-- Dropdown Menu for Solusi -->
                <div class="dropdown">
                    <a href="{{route ('konsultasi')}}">Konsultasi dengan ahli</a>
                </div>
            </li>
            <li><a href="#">Q&A</a></li>
            <li><a href="#">Pro Bono</a></li>
        </ul>
    </div>

    <!-- Main Content Section -->
    <div class="main-content">
        <!-- Document Cards Section -->
        <div class="document-grid">
            <div class="document-card">
                <h3>Surat Permohonan Keterangan Tidak Pernah Dipidana</h3>
                <p>Surat permohonan yang diajukan untuk mendapatkan surat keterangan tidak pernah dipidana yang dikeluarkan oleh pengadilan negeri.</p>
                <button><a href="{{ route('dokumen1') }}">Lihat template</a></button>
            </div>

            <div class="document-card">
                <h3>Surat Permohonan Keterangan Tidak Pernah Dipidana</h3>
                <p>Surat permohonan yang diajukan untuk mendapatkan surat keterangan tidak pernah dipidana yang dikeluarkan oleh pengadilan negeri.</p>
                <button><a href="#">Lihat template</a></button>
            </div>
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
            background-color: #5b1b1b;
            color: white;
        }

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
            position: relative;
        }

        .navbar ul li {
            position: relative;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .navbar ul li a:hover {
            color: #D6C3A5;
        }

        /* Dropdown Styling */
        .navbar ul li .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #813636;
            padding: 10px;
            border-radius: 5px;
            min-width: 200px;
            z-index: 1;
        }

        .navbar ul li:hover .dropdown {
            display: block;
        }

        .dropdown a {
            display: block;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
        }

        .dropdown a:hover {
            background-color: #5b1b1b;
            color: #D6C3A5;
            border-radius: 5px;
        }

        /* Breadcrumb */
        .breadcrumb {
            margin: 20px 50px;
            font-size: 18px;
        }

        .breadcrumb span {
            color: #D6C3A5;
        }

        .breadcrumb a {
            text-decoration: none;
            color: white;
        }

        /* Main Content */
        .main-content {
            padding: 20px 50px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Document Cards */
        .document-grid {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .document-card {
            background-color: #813636;
            padding: 20px;
            width: 48%;
            border-radius: 10px;
            border: 2px solid white;
            text-align: center;
            transition: all 0.3s ease;
        }

        .document-card:hover {
            background-color: #5b1b1b;
        }

        .document-card h3 {
            font-size: 18px;
            color: white;
            margin-bottom: 10px;
        }

        .document-card p {
            font-size: 16px;
            color: #D6C3A5;
            margin-bottom: 15px;
        }

        .document-card button {
            padding: 10px 20px;
            background-color: #D6C3A5;
            color: #5b1b1b;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .document-card button a {
            color: #5b1b1b;
            text-decoration: none;
            font-weight: bold;
        }

        .document-card button:hover {
            background-color: #c1b197;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .document-grid {
                flex-direction: column;
            }

            .document-card {
                width: 100%;
            }
        }
    </style>


