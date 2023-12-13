<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form pendaftaran
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Validasi data (tambahkan validasi tambahan sesuai kebutuhan)
    if (empty($fullname) || empty($username) || empty($dob) || empty($phone) || empty($password)) {
        // Data tidak lengkap
        header("Location: register.html?error=empty");
        exit();
    }

    // Simpan data pengguna dalam sesi
    $_SESSION['user'] = [
        'fullname' => $fullname,
        'username' => $username,
        'dob' => $dob,
        'phone' => $phone,
        'password' => $password, // Sebaiknya gunakan enkripsi untuk menyimpan password dengan aman
    ];

    // Redirect ke halaman sukses pendaftaran
    header("Location: register_success.php");
    exit();
} else {
    // Jika tidak ada request POST, kembalikan ke halaman pendaftaran
    header("Location: register.html");
    exit();
}
?>
