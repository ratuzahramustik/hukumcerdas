@extends ('dashboard')

@section('content')

<div class="container">
    <div class="contact-header">
        <h2>Tim Hukum Cerdas</h2>
    </div>

    <div class="contact-row">
        <div class="contact-card">
            <img src="path/to/image.jpg" alt="Maheswari Maudino, S.H">
            <h3>Maheswari Maudino, S.H</h3>
            <p>+62 859-3294-0537</p>
        </div>

        <div class="contact-card">
            <img src="path/to/image.jpg" alt="Maheswari Maudino, S.H">
            <h3>Maheswari Maudino, S.H</h3>
            <p>+62 859-3294-0537</p>
        </div>
    </div>

    <div class="info-row">
        <div class="info-block">
            <h4>Address</h4>
            <p>Paledang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat</p>
        </div>

        <div class="info-block">
            <h4>Email</h4>
            <p>Hukumcerdas@Humdas@id</p>
        </div>

        <div class="info-block">
            <h4>Telephone</h4>
            <p>+62 859-3294-0537</p>
        </div>
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
            text-align: center;
        }

        .contact-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .contact-row {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .contact-card {
            width: 250px;
            background-color: #FFFFFF;
            color: #4D0F0F;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .contact-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .contact-card p {
            margin: 5px 0;
            font-size: 14px;
        }

        .info-row {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .info-block {
            width: 250px;
            margin-bottom: 20px;
        }

        .info-block h4 {
            font-size: 16px;
            margin-bottom: 10px;
            color: #FFD700; /* Gold color */
        }

        .info-block p {
            margin: 5px 0;
            font-size: 14px;
            color: #FFFFFF;
        }
    </style>


