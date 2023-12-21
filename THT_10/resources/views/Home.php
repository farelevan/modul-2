<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost & Found Universitas Pertamina</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <nav>
        <a href="Home.html">
            <img src="Logo-UP.png" height="40" width="auto">
            <h2>Lost & Found Universitas Pertamina</h2>
        </a>
        <ul>
            <li class="nav">
                <h3><a href="#">Beranda</a></h3>
            </li>
            <li class="nav">
                <h3><a href="#">Daftar Barang Hilang</a></h3>
            </li>
            <li class="nav">
                <h3><a href="#">Kontak</a></h3>
            </li>
        </ul>
    </nav>

    <main>
        <section id="lost-items">
            <h2>Daftar Barang Hilang</h2>
            <div class="items" id="lostItemsContainer">
                <!-- Items will be dynamically added here using JavaScript -->
            </div>
        </section>

        <section id="claim-form" style="display: none;">
            <div id="popup">
                <h2>Claim an Item</h2>
                <form>
                    <label for="claimant-name">Your Name:</label>
                    <input type="text" id="claimant-name" required>
                    <label for="claimant-contact">Contact Information:</label>
                    <input type="text" id="claimant-contact" required>
                    <button type="submit" id="submit-claim">Submit Claim</button>
                </form>
                <button id="close-popup">Close</button>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Lost & Found Universitas Pertamina</p>
    </footer>
    <script src="/script.js"></script>
</body>
</html>
