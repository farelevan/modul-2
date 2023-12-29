<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lost and Found</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Atau gunakan versi yang sesuai dengan kebutuhan Anda -->
    <style>
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding-left: 30px;
        }

        nav a{
            display: flex;
            align-items: center;
            justify-content: center;
            justify-self: center;
            color: white
        }

        nav a h2{
            margin-left: 10px;
        }

        nav ul{
            display:flex;
        }

        li.nav{
            background-color: transparent;
            list-style: none;
            border: none;
            width: 180px;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;

        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            text-align: center;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }


        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            margin-top: auto;
        }
    </style>

</head>
<body>
    <nav>
        <a href="{{route('losts.index')}}">
            <img src="Logo-UP.png" height="40" width="auto">
            <h2>Lost & Found Universitas Pertamina</h2>
        </a>
        <ul>
            <li class="nav">
                <h3><a href="{{route('losts.index')}}">Beranda</a></h3>
            </li>
            <li class="nav">
                <h3><a href="{{route('logout')}}">Logout</a></h3>
            </li>
        </ul>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2023 Lost & Found Universitas Pertamina</p>
    </footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
