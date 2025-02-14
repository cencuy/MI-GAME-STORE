<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI SHOP EDIT</title>
    <style>
        body {
            background-color: #180120;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #fff;
        }

        .form-container {
            background-color: #2b0a3d;
            border-radius: 15px;
            padding: 30px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        h2 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            padding: 12px 8px;
        }

        td:first-child {
            font-weight: bold;
            color: #c9c9c9;
            width: 40%;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background-color: #460a70;
            color: #fff;
            font-size: 0.95rem;
            outline: none;
            transition: 0.3s;
        }

        input[type="text"]:focus, select:focus {
            background-color: #5c2679;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: linear-gradient(90deg, #6a0dad, #8e44ad);
            color: #fff;
            font-size: 1.1rem;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background: linear-gradient(90deg, #8e44ad, #6a0dad);
        }

        input[readonly] {
            background-color: #3b1c52;
            font-weight: bold;
        }

        .form-footer {
            text-align: center;
            margin-top: 10px;
            font-size: 0.9rem;
            color: #aaa;
        }

        .form-footer a {
            color: #e0aaff;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>ISI FORMULIR</h2>
        <?php

                include "koneksi.php";

                // Pastikan parameter id diambil dengan aman
                if (!isset($_GET['id']) || empty($_GET['id'])) {
                    echo "<p style='color: red; text-align: center;'>ID tidak ditemukan dalam URL.</p>";
                    exit;
                }
                
                $id = $_GET['id'];
                
                  
                    $data = mysqli_query($conn, "SELECT * FROM format WHERE id='$id'");

                    // Periksa apakah data ditemukan
                    if (mysqli_num_rows($data) > 0) {
                        $a = mysqli_fetch_array($data);
                    } else {
                        echo "<p style='color: red; text-align: center;'>Data tidak ditemukan!</p>";
                        exit;
                    }

                ?>
        <form action="proses_edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $a['id']; ?>">
            <table>
                <tr>
                    <td>Id game</td>
                    <td><input type="text" name="id_game" value="<?php echo $a['id_game']; ?>" required></td>
                </tr>
                <tr>
                    <td>Server</td>
                    <td><input type="text" name="server" value="<?php echo $a['id_server']; ?>" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="nick_name" value="<?php echo $a['Nick_Name']; ?>" required></td>
                </tr>
                <tr>
                    <td>Diamond</td>
                    <td>
                        <select name="jumlah_diamond" required>
                            <option value="" disabled>Pilih Jumlah Diamond</option>
                            <option value="70 Diamonds - 10.000" <?php if ($a['Jumlah_DM'] == "70 Diamonds - 10.000") echo "selected"; ?>>70 Diamonds - 10.000</option>
                            <option value="140 Diamonds - 22.000" <?php if ($a['Jumlah_DM'] == "140 Diamonds - 22.000") echo "selected"; ?>>140 Diamonds - 22.000</option>
                            <option value="280 Diamonds - 30.000" <?php if ($a['Jumlah_DM'] == "280 Diamonds - 30.000") echo "selected"; ?>>280 Diamonds - 30.000</option>
                            <option value="350 Diamonds - 35.000" <?php if ($a['Jumlah_DM'] == "350 Diamonds - 35.000") echo "selected"; ?>>350 Diamonds - 35.000</option>
                            <option value="500 Diamonds - 60.000" <?php if ($a['Jumlah_DM'] == "500 Diamonds - 60.000") echo "selected"; ?>>500 Diamonds - 60.000</option>
                            <option value="720 Diamonds - 100.000" <?php if ($a['Jumlah_DM'] == "720 Diamonds - 100.000") echo "selected"; ?>>720 Diamonds - 100.000</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Metode Pembayaran</td>
                    <td>
                        <select name="payment" id="payment-method" required onchange="updatePaymentNumber()">
                            <option value="" disabled>Pilih Metode Pembayaran</option>
                            <option value="OVO" <?php if ($a['PAYMENT'] == "OVO") echo "selected"; ?>>OVO</option>
                            <option value="Dana" <?php if ($a['PAYMENT'] == "Dana") echo "selected"; ?>>Dana</option>
                            <option value="BRI" <?php if ($a['PAYMENT'] == "BRI") echo "selected"; ?>>BRI</option>
                            <option value="BCA" <?php if ($a['PAYMENT'] == "BCA") echo "selected"; ?>>BCA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nomor Pembayaran</td>
                    <td><input type="text" id="payment-number" name="payment_number" value="<?php echo $a['no_pembayaran']; ?>" readonly></td>
                </tr>
             
            </table>
            <input type="submit" name="simpan" value="Simpan Perubahan">
        </form>
    </div>
</body>
</html>
