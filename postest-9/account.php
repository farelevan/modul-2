<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perpustakaan Sederhana - Informasi Akun</title>
</head>
<body>
    <div class="container">
        <h1>Informasi Akun</h1>

        <?php
            // Mulai sesi untuk mengakses data pengguna yang telah disimpan
            session_start();

            // Periksa apakah sesi username sudah diatur
            if(isset($_SESSION['user'])) {
                $user = $_SESSION['user'];

                // Tampilkan informasi akun
                echo '<p>Nama Pengguna: ' . $user['fullname'] . '</p>';
                echo '<p>Tanggal Lahir: ' . $user['dob'] . '</p>';
                echo '<p>Nomor Telepon: ' . $user['phone'] . '</p>';
            } else {
                // Redirect ke halaman login jika tidak ada sesi username
                header("Location: login.html");
                exit();
            }
        ?>

        <button onclick="location.href='home.php'">Kembali ke Beranda</button>
    </div>
</body>
</html>
