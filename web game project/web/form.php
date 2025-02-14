<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI SHOP</title>
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

        input[type="submit"], .back-button {
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
            text-align: center;
            text-decoration: none;
            transition: background 0.3s;
        }

        input[type="submit"]:hover, .back-button:hover {
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
        <form action="formdata.php" method="post">
            <table>
                <tr>
                    <td>Id game</td>
                    <td><input type="text" name="id_game" placeholder="Masukkan ID Game Anda" required></td>
                </tr>
                <tr>
                    <td>Server</td>
                    <td><input type="text" name="server" placeholder="Masukkan Server Game Anda" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="nick_name" placeholder="Masukkan Nickname Anda" required></td>
                </tr>
                <tr>
                    <td>Diamond</td>
                    <td>
                        <select name="jumlah_diamond" required>
                            <option value="" disabled selected>Pilih Jumlah Diamond</option>
                            <option value="70 Diamonds - 10.000">70 Diamonds - 10.000</option>
                            <option value="140 Diamonds - 22.000">140 Diamonds - 22.000</option>
                            <option value="280 Diamonds - 30.000">280 Diamonds - 30.000</option>
                            <option value="350 Diamonds - 35.000">350 Diamonds - 35.000</option>
                            <option value="500 Diamonds - 60.000">500 Diamonds - 60.000</option>
                            <option value="720 Diamonds - 100.000">720 Diamonds - 100.000</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Metode Pembayaran</td>
                    <td>
                        <select name="payment" id="payment-method" required onchange="updatePaymentNumber()">
                            <option value="" disabled selected>Pilih Metode Pembayaran</option>
                            <option value="OVO">OVO</option>
                            <option value="Dana">Dana</option>
                            <option value="BRI">BRI</option>
                            <option value="BCA">BCA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nomor Pembayaran</td>
                    <td><input type="text" id="payment-number" name="payment_number" value="" readonly></td>
                </tr>
            </table>
            <input type="submit" name="simpan" value="Pesan Sekarang">
        </form>
        <a href="index.php" class="back-button">BATAL</a>
        <div class="form-footer">
            <p>Butuh bantuan? <a href="http://wa.me/082295903899">Hubungi kami</a></p>
        </div>
    </div>

    <script>
        // Daftar nomor pembayaran berdasarkan metode pembayaran
        const paymentNumbers = {
            "OVO": "0822959038999",
            "Dana": "0822959038000",
            "BRI": "1234567890",
            "BCA": "9876543210",
        };

        // Fungsi untuk memperbarui nomor pembayaran berdasarkan pilihan
        function updatePaymentNumber() {
            const paymentMethod = document.getElementById("payment-method").value;
            const paymentNumberInput = document.getElementById("payment-number");
            
            // Perbarui nilai nomor pembayaran
            paymentNumberInput.value = paymentNumbers[paymentMethod] || "";
        }
    </script>
</body>
</html>
