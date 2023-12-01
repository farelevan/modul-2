<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlahMataKuliah = count($_POST) - 1; // Menghitung jumlah mata kuliah (dikurangi satu karena ada tombol submit)

    $totalNilai = 0;
    foreach ($_POST as $key => $value) {
        // Menghitung total nilai
        if (strpos($key, 'matkul') === 0) {
            $totalNilai += (float)$value;
        }
    }

    // Menghitung IPS
    $ips = $totalNilai / $jumlahMataKuliah;

    // Menentukan status lulus
    $statusLulus = ($ips > 2) ? "Lulus" : "Tidak Lulus";

    // Menampilkan hasil
    echo "<h2>Hasil Perhitungan IPS</h2>";
    echo "<p>IPS: $ips</p>";
    echo "<p>Status Kelulusan: $statusLulus</p>";
}
?>
