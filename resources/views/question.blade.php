@extends('dashboard')


@section('content')

<!-- <div class="container">
    <div class="breadcrumb">
        Home > Solusi > Q&A
    </div> -->

    <h1>Q&A Section</h1>

    <!-- Question Section -->
    <div class="qa-section">
        <h2>Pertanyaan</h2>
        <input type="text" placeholder="Masukkan pertanyaan anda">
    </div>

    <!-- Review Section -->
    <div class="qa-section">
        <h2>Review</h2>
        <input type="text" placeholder="Tuliskan ulasan Anda di sini untuk membantu pengguna lainnya">
    </div>  

    <!-- Submit Button -->
    <div class="button-container">
        <button class="btn-submit">Kirim</button>
    </div>
</div>


@endsection

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #4D0F0F; /* Dark red background */
            color: #FFFFFF; /* White text */
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        .breadcrumb {
            color: #FFD700; /* Gold color */
            font-size: 14px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #FFFFFF;
        }

        .qa-section {
            background-color: #D3A972; /* Light brown */
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            color: #4D0F0F; /* Dark red text */
        }

        .qa-section h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .qa-section h2::before {
            content: "\2753"; /* Unicode for question mark icon */
            margin-right: 10px;
            font-size: 24px;
        }

        .qa-section input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            background-color: #C3A382;
            color: #4D0F0F;
        }

        .review-section {
            background-color: #B88A5B; /* Darker brown */
            padding: 20px;
            border-radius: 10px;
            color: #FFFFFF;
        }

        .review-section h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .review-section h3::before {
            content: "\1F4DD"; /* Unicode for note icon */
            margin-right: 10px;
            font-size: 24px;
        }

        .button-container {
            text-align: left;
            margin-top: 20px;
        }

        .btn-submit {
            background-color: #FFD700; /* Gold color for button */
            color: #4D0F0F;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #CDAA41; /* Darker gold */
        }
    </style>