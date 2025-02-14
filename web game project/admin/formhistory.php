<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Pemesanan</title>
    <style>
        body {
            background-color: mediumpurple;
            font-family: Arial, sans-serif;
        }
        h2 {
            color: white;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: lavender;
            border-radius: 5px;
            overflow: hidden;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        table th {
            background-color: #6a5acd;
            color: white;
        }
        .pending {
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        .pending:hover {
            background-color: #e68a00;
        }
        .sukses {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        .sukses:hover {
            background-color: #45a049;
        }
        .message {
            text-align: center;
            font-size: 16px;
            color: green;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <center>
        <h2>History Pemesanan Diamond</h2>

        <?php
       include "koneksi.php";
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
        // Cek apakah ada update status
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $status = $_POST['status'];
            $query_update = "UPDATE format SET status = '$status' WHERE id = '$id'";
            if (mysqli_query($conn, $query_update)) {
                echo "<p class='message'>Status berhasil diperbarui!</p>";
            } else {
                echo "<p class='message' style='color: red;'>Gagal memperbarui status: " . mysqli_error($conn) . "</p>";
            }
        }
        // Query menampilkan data
        $query = "SELECT * FROM format";
        $result = mysqli_query($conn, $query);
        ?>

        <table>
            <tr>
                <th>ID Pemesanan</th>
                <th>ID Game</th>
                <th>Server</th>
                <th>Nick Name</th>
                <th>Jumlah Diamond</th>
                <th>Metode Pembayaran</th>
                <th>No Pembayaran</th>
                <th>Waktu Pemesanan</th>
                <th>Status</th>
                <th>Update Status</th>
                <th>option</th>
            </tr>
            <?php 
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['id_game']; ?></td>
                    <td><?php echo $row['id_server']; ?></td>
                    <td><?php echo $row['Nick_Name']; ?></td>
                    <td><?php echo $row['Jumlah_DM']; ?></td>
                    <td><?php echo $row['PAYMENT']; ?></td>
                    <td><?php echo $row['no_pembayaran']; ?></td>
                    <td><?php echo $row['Create_at']; ?></td>
                    <td><?php echo $row['status']; ?></td>

                    <td>
                        <form method="POST" style="display: inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="status" value="Pending" class="pending">Pending</button>
                        </form>
                        <form method="POST" style="display: inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="status" value="Sukses" class="sukses">Sukses</button>
                        </form>
                    </td>
                    <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a><br>
                    <a href="delate.php?id=<?php echo $row['id']; ?>" 
                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                </td>

                </tr>
            <?php 
                } 
                ?>
        </table>
    </center>
</body>
</html>
