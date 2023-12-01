<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlahMataKuliah = count($_POST) - 1; // Menghitung jumlah mata kuliah (dikurangi satu karena ada tombol submit)

    $totalBobot = 0;
    $totalSKS = 0;

    foreach ($_POST as $key => $value) {
        // Menghitung total bobot dan total SKS
        if (strpos($key, 'matkul') === 0) {
            $bobot = (float)$value;
            $totalBobot += $bobot;

            // Anggap setiap mata kuliah memiliki 1 SKS
            $totalSKS += 1;
        }
    }

    // Menghitung IPS rata-rata
    if ($totalSKS > 0) {
        $ips = $totalBobot / $totalSKS;
    } else {
        $ips = 0; // Menghindari pembagian dengan nol
    }

    // Menentukan status lulus
    $statusLulus = ($ips >= 2) ? "Lulus" : "Tidak Lulus";

    // Menampilkan hasil
    echo "<h2>Hasil Perhitungan IPS</h2>";
    echo "<p>IPS: $ips</p>";
    echo "<p>Status Kelulusan: $statusLulus</p>";

    // Tombol kembali
    echo '<br><button onclick="kembali()">Kembali</button>';
}
?>

<script>
    function kembali() {
        window.history.back();
    }
</script>
