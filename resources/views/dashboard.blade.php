
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hukum Cerdas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f8f9fa;
            color: #333;
            min-height: 100vh;
            margin: 0;
        }

        /* Navbar */
        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #691a20;
            padding: 15px 30px;
            color: white;
            position: fixed;
            top: 0;
            z-index: 10;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
            color: #D6C3A5;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .navbar ul li {
            display: inline-block;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        .navbar ul li a:hover {
            color: #D6C3A5;
        }

        .user-icon {
            font-size: 20px;
        }

        /* Main Content */
        .content {
            margin-top: 80px; 
            width: 100%;
            padding: 20px;
            text-align: center;
        }

        /* Responsive Navbar */
        @media (max-width: 768px) {
            .navbar ul {
                flex-direction: column;
                gap: 15px;
                background-color: #333;
                position: absolute;
                width: 100%;
                left: 0;
                top: 60px;
                padding: 15px;
                display: none;
            }

            .navbar ul.show {
                display: flex;
            }

            .navbar .logo {
                font-size: 20px;
            }

            .navbar-toggle {
                display: block;
                cursor: pointer;
                font-size: 24px;
                color: white;
            }

            .user-icon {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">Hukum Cerdas</div>
        <ul id="navbar-menu">
            <li><a href="{{ route('dashboard') }}">Home</a></li>
            <li><a href="{{ route('infohukum') }}">Info Hukum</a></li>
            <li><a href="{{ route('solusi') }}">Solusi</a></li>
            <li><a href="{{route('question')}}">Q&A</a></li>
            <li><a href="{{route('pro')}}">Pro Bono</a></li>
            <li><a href="{{ route('profile.show') }}"><i class="fas fa-user user-icon"></i></a></li> <!-- User icon -->
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <script>
        // Toggle navbar on mobile
        function toggleNavbar() {
            const navbarMenu = document.getElementById('navbar-menu');
            navbarMenu.classList.toggle('show');
        }
    </script>
</body>

</html>
