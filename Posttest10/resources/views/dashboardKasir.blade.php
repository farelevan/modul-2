<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())
}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Data Pribadi Anda</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>

<body>
    <h1>Data Anda</h1>
    <p>NIK: {{ $data['NIK'] }}</p>
    <p>Nama: {{ $data['name'] }}</p>
    <p>Provinsi: {{ $data['provinsi'] }}</p>
    <p>Kota: {{ $data['kota'] }}</p>
    <p>Nomor Telepon: {{ $data['telepon'] }}</p>

</body>

</html>
