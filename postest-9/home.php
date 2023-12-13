<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perpustakaan Sederhana - Homepage</title>

    <style>
        body {
            background-image: linear-gradient(to right, #CDB4DB, #FFC8DD, #FFAFCC);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #333;
            color: white;
            text-align: center;
            display: flex;
            justify-content: space-between;
        }

        .navbar-btn {
            margin-top: 10px;
            margin-left: 20px;
        }

        .navbar-btn-right {
            margin-top: 10px;
            margin-right: 20px;
        }

        .welcome-message {
            text-align: center;
            
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .book {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            text-align: center;
            width: calc(25% - 20px); /* 25% width for each book with 20px margin */
            box-sizing: border-box;
        }

        .book img {
            width: 100px;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="navbar-btn">
            <button onclick="location.href='account.php'">Informasi Akun</button>
        </div>
        <div class="welcome-message">
            <?php
                // Mulai sesi untuk mengakses data pengguna yang telah disimpan
                session_start();

                // Periksa apakah sesi username sudah diatur
                if(isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    echo '<h1>Selamat Datang, ' . $username . '!</h1>';
                } else {
                    // Redirect ke halaman login jika tidak ada sesi username
                    header("Location: login.html");
                    exit();
                }
            ?>
        </div>
        <div class="navbar-btn-right">
            <button onclick="location.href='logout.php'">Keluar</button>
        </div>
    </nav>

    <!-- Tampilkan daftar buku -->
    <div class="container">
        <div class="book">
            <img src="https://pbs.twimg.com/media/Fex0AnUagAAZXBR.jpg" alt="Sejaruh Dunia yang Disembunyikan">
            <h5>Sejaruh Dunia yang Disembunyikan</h5>
            <button onclick="location.href='book.php?id=1'">Lihat Detail</button>
        </div>

        <div class="book">
            <img src="https://1.bp.blogspot.com/-P0mSccrg1II/W4jyAYSu6qI/AAAAAAAAAFM/jJoyqxNWXBw982UPQk2pY0ySDgoqw3n8wCLcBGAs/s1600/Novel_Negeri_5_Menara__Ahmad_Faudi__Buku_ORI__Soft_Cover.jpg" alt="Sejaruh Dunia yang Disembunyikan">
            <h5>Negeri 5 Menara</h5>
            <button onclick="location.href='book.php?id=2'">Lihat Detail</button>
        </div>
        
        <div class="book">
            <img src="https://th.bing.com/th/id/OIP.F_jJeY87CWUlV_vExj249AHaKm?pid=ImgDet&w=157&h=224&c=7" alt="Sejaruh Dunia yang Disembunyikan">
            <h5>Critical Eleven</h5>
            <button onclick="location.href='book.php?id=3'">Lihat Detail</button>
        </div>

        <!-- Tambahkan buku lainnya di sini -->
    </div>
</body>
</html>
