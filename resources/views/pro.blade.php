@extends ('dashboard')

@section('content')

<!-- <div class="container">
    <div class="breadcrumb">
        Home > Solusi > Pro Bono
    </div> -->

    <h1>Pemberian Layanan Bantuan Hukum Secara Gratis</h1>

    <div class="probono-section">
        <p>
            Pro Bono berasal dari bahasa latin yang berarti for the public good atau untuk kebaikan publik/masyarakat, yaitu pemberian cuma-cuma terhadap suatu layanan atau jasa kepada orang yang membutuhkan. 
            Yang berhak mendapatkan fasilitas Pro Bono dari kami adalah orang atau kelompok orang miskin dan masyarakat atau kelompok masyarakat sebagai pencari keadilan yang berkategori miskin.
        </p>

        <h2>Persyaratan:</h2>
        <ul>
            <li>Surat Keterangan Tidak Mampu (SKTM) yang dikeluarkan oleh Kepala Desa/Lurah/Kepala Wilayah setempat yang menyatakan bahwa benar yang bersangkutan tidak mampu membayar biaya perkara, atau</li>
            <!-- You can add more list items here as needed -->
        </ul>
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

        .probono-section {
            background-color: #D3A972; /* Light brown background for info section */
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            color: #4D0F0F; /* Dark red text */
        }

        .probono-section p {
            font-size: 16px;
            line-height: 1.6;
        }

        .probono-section h2 {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }

        .probono-section ul {
            margin-top: 10px;
            list-style-type: none;
            padding: 0;
        }

        .probono-section ul li {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .probono-section ul li::before {
            content: "\2022"; /* Unicode bullet point */
            color: #FFD700; /* Gold bullet point */
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
    </style>
