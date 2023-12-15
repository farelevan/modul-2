<!-- resources/views/pesan.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())
}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Tampilan Data Kependudukan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>

<body>
    <h1>Input Data Diri Anda</h1>
    <form method="post" action="{{ route('submit-order')
}}">
        @csrf

        <label for="NIK">NIK:</label>
        <input type="text" id="NIK" name="NIK" required><br> <br>

        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br> <br>

        <label for="provinsi">Provinsi:</label>
        <input type="text" id="provinsi" name="provinsi" required><br> <br>

        <label for="kota">Kota:</label>
        <input type="text" id="kota" name="kota" required><br> <br>

        <label for="telepeon">Nomor Telepon:</label>
        <input type="text" id="telpeon" name="telpeon" required><br> <br>

        <button type="submit">Submit Pesanan</button>
    </form>
</body>

</html>
