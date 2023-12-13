<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perpustakaan Sederhana - Masuk</title>
    <script src="validation.js"></script>

    <style>
       body{
            background-image: linear-gradient(to right, #CDB4DB, #FFC8DD, #FFAFCC);
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Masuk</h1>
        <form action="login_process.php" method="POST" onsubmit="return validateForm()">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Masuk</button>
        </form>
        <?php
            if(isset($_GET['error']) && $_GET['error'] == 'invalid') {
                echo '<p style="color: red;">Username atau password salah. Silakan coba lagi.</p>';
            }
        ?>
        <p>Belum punya akun? <a href="register.html">Daftar disini</a></p>
    </div>
</body>
</html>
