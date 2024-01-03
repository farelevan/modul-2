<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Wilayah Di Indonesia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Atau gunakan versi yang sesuai dengan kebutuhan Anda -->

    <style>
        body {
            display: flex;
            background-image: url('{{ asset('indonesia.jpg') }}');
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-top: 120px;
            font-family: 'Arial', sans-serif;
        }

        li{
            color: rgb(223, 161, 46);
            font-weight: bold;
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        a {
            color: rgb(223, 161, 46);
            font-weight: bold;
        }
        video {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translateX(-50%) translateY(-50%);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var audio = document.getElementById('backgroundAudio');
            var isPlaying = true;

            document.addEventListener('click', function () {
                if (audio.paused) {
                    audio.play();
                } else {
                    audio.pause();
                }
                isPlaying = !isPlaying;
            });
        });
    </script>

</head>
<body>

    <div class="container mt-5">
        <audio id="backgroundAudio" autoplay loop>
            <source src="{{ asset('music/LaguKece.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <video id="backgroundVideo" autoplay muted loop>
            <source src="{{ asset('INDONESIA.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        @yield('content')
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
