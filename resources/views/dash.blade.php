@extends('dashboard')

@section('content')
    <div class="hero">
        <h1>We Never Stop Until We Win</h1>
        <p>Solusi Hukum dengan Mudah dan Cepat</p>
        <button class="btn"><a href="{{ route('about') }}" style="text-decoration: none; color: black;">About</a></button>
    </div>
@endsection

<style>
    /* Hero Section */
    .hero {
        background-image: url('assets/img/pengacara.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        width: 100vw;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        position: relative;
        font-family: 'Times New Roman', serif;
        width: 100%;
    }
    

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .hero h1 {
        font-size: 56px;
        z-index: 2;
        margin: 0;
    }

    .hero p {
        font-size: 24px;
        z-index: 2;
        margin-top: 10px;
    }

    .hero .btn {
        padding: 15px 30px;
        background-color: #D6C3A5;
        border: none;
        font-size: 18px;
        border-radius: 10px;
        cursor: pointer;
        z-index: 2;
        margin-top: 20px;
        transition: background-color 0.3s;
    }

    .hero .btn:hover {
        background-color: #c7b59c;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 40px;
        }

        .hero p {
            font-size: 18px;
        }

        .navbar {
            padding: 10px 20px;
        }

        .navbar ul li {
            margin-left: 10px;
        }

        .navbar ul li a {
            font-size: 16px;
        }
    }
</style>
