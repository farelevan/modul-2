<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ambil data pengguna yang terdaftar dari sesi
    if (isset($_SESSION['user'])) {
        $registeredUser = $_SESSION['user'];

        // Validasi username dan password
        if ($username == $registeredUser['username'] && $password == $registeredUser['password']) {
            // Simpan data pengguna ke dalam sesi
            $_SESSION['username'] = $username;
            // Redirect ke halaman sukses (home.php)
            header("Location: home.php");
            exit();
        }
    }

    // Gagal login, arahkan kembali ke halaman login dengan pesan peringatan
    header("Location: login.php?error=invalid");
    exit();
} else {
    // Jika tidak ada request POST, kembalikan ke halaman login
    header("Location: login.php");
    exit();
}
?>
