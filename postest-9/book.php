<?php
session_start();

$bookId = $_GET['id'];

// Informasi buku dan stok
if (!isset($_SESSION['details'])) {
    $_SESSION['details'] = [
        1 => ['Sejarah Dunia yang Disembunyikan', 'Jonathan Black', '14 Mei 2015', 'Buku Sejarah Dunia Yang Disembunyikan yang ditulis oleh Jonathan Black merupakan buku yang mengungkapkan tentang keraguan dan kepercayaan kita akan sejarah mitologi Yunani dan Mesir Kuno serta cerita rakyat Yahudi yang tidak dapat kita lihat langsung kebenarannya. Buku ini ditulis dengan tujuan memberitahu pembaca tentang fakta dasar sejarah yang berbeda dari yang kita tahu. Pembaca akan mendapatkan pengetahuan baru dan lebih tercerahkan akan wawasan sejarah dunia.'],

        2 => ['Negeri 5 Menara', 'Anwar Faudi', '01 Februari 2013', 'Negeri 5 Menara adalah buku pertama dari sebuah trilogi. Ditulis oleh A. Fuadi, mantan wartawan ini meniatkan sebagian royalti royaltinya untuk merintis Komunitas Menara, sebuah lembaga sosial untuk membantu pendidikan orang yang tidak mampu dengan basis sukarelawan. Novel ini berisi cerita yang menyentuh yang memotivasi untuk senantiasa belajar dan bermimpi mencapai kebaikan. Cerita yang ditampilkan mengasah kecerdasan emosi dan spiritual.'],

        3 => ['Critical Eleven', 'Ika Natassa', '19 Agustus 2010', 'Membaca Critical Eleven? Tiga menit pertama yang menyenangkan, delapan menit terakhir yang mengesankan, dan hanya butuh kurang dari 11 detik untuk memutuskan bahwa ini adalah karya favorit saya dari Ika Natassa. Ika sebagai pilot, mengendalikan segalanya dengan sangat baik dan berakhir dengan super smooth landing.'],
    
    ];
}

$bookInfo = $_SESSION['details'];

if (isset($bookInfo[$bookId])) {
    $info = $bookInfo[$bookId];
} else {
    $info = ['Tidak Ada Informasi'];
}

// Tombol Pinjam Buku
if (isset($_POST['borrow'])) {
    if (!isset($_SESSION['borrowed'][$bookId])) {
        // Pinjam buku
        $_SESSION['borrowed'][$bookId] = true;
        echo '<script>alert("Anda telah berhasil meminjam ' . $info[0] . '");</script>';
    } else {
        // Buku sudah dipinjam
        echo '<script>alert("Anda sudah meminjam buku ini.");</script>';
    }
}

// Tombol Kembalikan Buku
if (isset($_POST['return'])) {
    if (isset($_SESSION['borrowed'][$bookId])) {
        // Kembalikan buku
        unset($_SESSION['borrowed'][$bookId]);
        echo '<script>alert("Buku telah berhasil dikembalikan!");</script>';
    } else {
        // Buku belum dipinjam
        echo '<script>alert("Anda belum meminjam buku ini.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perpustakaan Sederhana - Detail Buku</title>

    <style>
       body{
            background-image: linear-gradient(to right, #CDB4DB, #FFC8DD, #FFAFCC);
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Detail Buku</h1>
        <h2><?php echo $info[0]; ?></h2>
        <?php echo $info[3]; ?></p>
        <p>Penulis: <?php echo $info[1]; ?></p>
        <p>Tahun Terbit: <?php echo $info[2]; ?></p>
        <form action="" method="post">
            <button name="borrow" type="submit">Pinjam Buku</button>
            <?php if (isset($_SESSION['borrowed'][$bookId])) : ?>
                <button name="return" type="submit">Kembalikan Buku</button>
            <?php endif; ?>
        </form>
        <button onclick="location.href='home.php'">Kembali ke Homepage</button>
    </div>
</body>
</html>
