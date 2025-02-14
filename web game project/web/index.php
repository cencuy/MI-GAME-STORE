<?php
session_start();
if (!isset($_SESSION["is_login"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI GAME STORE</title>
    <style>
        /* Reset dasar */
        body {
            font-family: 'Arial', sans-serif;
            margin: 80px;
            padding: 0;
            background-color: #180120;
            color: #ffffff;
            text-align: center;
        }

        h1 {
            font-size: 3rem;
            color: #ffffff;
            margin-top: 20px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .subtitle {
            font-size: 1.2rem;
            color: #ffeb3b;
            margin: 10px 0 40px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        /* Gaya untuk Kartu Game */
        .game-card {
            background-color: #2b0a3d;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .game-card img {
            margin: 30px;
            width: 60%;
            height: auto;
            border-radius: 15px;
            margin-bottom: 5px;
        }

        .game-card h3 {
            font-size: 1.2rem;
            color: #fff;
            margin: 10px 0;
            font-weight: bold;
        }

        .game-card p {
            font-size: 0.9rem;
            color: #ccc;
            margin: 5px 0;
        }

        .game-card:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        /* Tombol "Go" */
        .btn-topup {
            display: inline-block;
            font-size: 1rem;
            text-decoration: none;
            color: #440b5b;
            font-weight: bold;
            padding: 12px 30px;
            margin: 10px auto 40px;
            border-radius: 30px;
            background: linear-gradient(90deg, #ffeb3b, #ffc107);
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(255, 235, 59, 0.4);
        }

        .btn-topup:hover {
            background: linear-gradient(90deg, #ffc107, #ffeb3b);
            color: #2c003c;
            box-shadow: 0 6px 15px rgba(255, 235, 59, 0.6);
            transform: translateY(-3px);
        }

        /* Hover effect */
        .game-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1>MI GAME STORE</h1>
    <p>Selamat datang, <b><?= $_SESSION["username"]; ?></b>!</p>
    <a href="logout.php" class="btn-topup">Logout</a>

    <div id="games" class="container">
        <div class="game-card">
            <img src="mlbb.jpg" alt="Mobile Legends">
            <h3>Mobile Legends</h3>
            <p>Top Up dan dapatkan Diskon 50% setiap 10x pembelian diamond.</p>
            <a href="loading.php" class="btn-topup">Go</a>
        </div>
        <div class="game-card">
            <img src="freefire.jpg" alt="Free Fire">    
            <h3>Free Fire</h3>
            <p>Top Up dan dapatkan Diskon 20% setiap 10x pembelian diamond.</p>
            <a href="loading.php" class="btn-topup">Go</a>
        </div>
        <div class="game-card">
            <img src="eFootball.jpg" alt="eFootball 2024">
            <h3>Genshin Impact</h3>
            <p>Top Up dan dapatkan Diskon 15% setiap 10x pembelian diamond.</p>
            <a href="loading.php" class="btn-topup">Go</a>
        </div>
        <div class="game-card">
            <img src="pubg.jpg" alt="PUBG Mobile">
            <h3>PUBG Mobile</h3>
            <p>Top Up dan dapatkan Diskon 30% setiap 10x pembelian diamond.</p>
            <a href="loading.php" class="btn-topup">Go</a>
        </div>
    </div>
    
    <div class="form-footer">
        <p>Butuh bantuan? <a href="http://wa.me/082295903899">Hubungi kami</a></p>
    </div>
</body>
</html>
