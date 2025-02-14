<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI SHOP</title>
    <style>
        /* Atur latar belakang penuh */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #180120; /* Warna gelap sesuai contoh */
            color: #fff;
            font-family: Arial, sans-serif;
        }

        /* Layar loading */
        .loading-screen {
            text-align: center;
        }

        /* Gambar ikon */
        .loading-icon {
            width: 60px;
            height: auto;
            margin-bottom: 20px;
        }

        /* Batang loading */
        .loading-bar {
            position: relative;
            width: 200px;
            height: 5px;
            background-color: #ffffff50; /* Latar belakang semi transparan */
            margin: 10px auto 20px;
            overflow: hidden;
            border-radius: 3px;
        }

        /* Animasi progress */
        .progress {
            position: absolute;
            width: 0%;
            height: 100%;
            background-color: #6200ff; /* Warna ungu untuk progress */
            animation: loading 2s infinite;
        }

        /* Teks loading */
        .loading-text {
            font-size: 1rem;
            margin-top: 10px;
        }

        /* Animasi keyframe untuk progress bar */
        @keyframes loading {
            0% {
                width: 0%;
            }
            50% {
                width: 80%;
            }
            100% {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="loading-screen">
       <h3><p>MI GAME STORE</p></h3>
        <div class="loading-bar">
            <div class="progress"></div>
        </div>
        <p class="loading-text">Loading...</p>
    </div>
    <script>
        // Timer untuk pengalihan
        setTimeout(function () {
            // Arahkan ke halaman form.php setelah 1 detik
            window.location.href = "form.php",herf = "struk,php", herf="index.php";
        }, 1000); // 1000ms = 1 detik
    </script>
</body>
</html>
