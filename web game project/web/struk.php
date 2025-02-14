<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian</title>
    <style>
        /* Reset dan Setup Dasar */
        body {
            font-family: 'Arial', sans-serif;
            margin: 120px;
            padding: 0;
            background-color: #180120;
            color: #fff;
            text-align: center;
        }

        .struk-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 30px;
            background: #2b0a3d;
            border-radius: 10px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
        }

        h3 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }

        table {
            width: 100%;
            margin-top: 20px;
            text-align: left;
            font-size: 1.0rem;
            color: #fff;
            border-collapse: collapse;
        }

        table td {
            padding: 8px;
            vertical-align: middle;
        }

        table tr:nth-child(even) {
            background-color: #5f115c;
        }

        table td strong {
            color: #fff;
        }

        .btn-print {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .btn-print button {
            display: block;
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: linear-gradient(90deg, #6a0dad, #8e44ad);
            color: #fff;
            font-size: 1.0rem;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-print button:hover {
            background: linear-gradient(90deg, #8e44ad, #6a0dad);
            transform: scale(1.05);
        }

        .btn-print a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="struk-container">
        <h2>Struk Pembelian Diamond</h2>
        <table>
            <tr>
                <td><strong>ID Game:</strong></td>
                <td>:</td>
                <td><?= htmlspecialchars($_POST['id_game'] ?? '-') ?></td>
            </tr>
            <tr>
                <td><strong>Server:</strong></td>
                <td>:</td>
                <td><?= htmlspecialchars($_POST['server'] ?? '-') ?></td>
            </tr>
            <tr>
                <td><strong>Nick Name:</strong></td>
                <td>:</td>
                <td><?= htmlspecialchars($_POST['nick_name'] ?? '-') ?></td>
            </tr>
            <tr>
                <td><strong>Jumlah Diamond:</strong></td>
                <td>:</td>
                <td><?= htmlspecialchars($_POST['jumlah_diamond'] ?? '-') ?></td>
            </tr>
            <tr>
                <td><strong>Metode Pembayaran:</strong></td>
                <td>:</td>
                <td><?= htmlspecialchars($_POST['payment'] ?? '-') ?></td>
            </tr>
            <tr>
                <td><b>Nomor Pembayaran:</b></td>
                <td>:</td>
                <td><strong>0822959038999</strong></td>
            </tr>
        </table>
<br>
        <div class="btn-group">
            <button onclick="window.open('https://link.dana.id', '_blank')">Bayar via Dana</button>
            <button onclick="window.open('https://link.bankbca.co.id', '_blank')">Bayar via BCA</button>
            <button onclick="window.open('https://link.qris.com', '_blank')">Bayar via QRIS</button>
        </div>

        <div class="btn-print">
            <button onclick="window.print()">Print Struk</button>
            <button><a href="index.php" class="button-next">KEMBALI/PESAN LAGI</a></button>
        </div>
    </div>
</body>
</html>
