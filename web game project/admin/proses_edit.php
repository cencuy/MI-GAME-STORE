<?php
include "koneksi.php";

// Pastikan form di-submit dengan POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data yang dikirim dari form
    $id = $_POST['id'];
    $id_game = $_POST['id_game'];
    $server = $_POST['server'];
    $nick_name = $_POST['nick_name'];
    $jumlah_diamond = $_POST['jumlah_diamond'];
    $payment = $_POST['payment'];
    $payment_number = $_POST['payment_number'];

    // Update data ke database
    $query = "UPDATE format SET 
                id_game = '$id_game',
                id_server = '$server',
                Nick_Name = '$nick_name',
                Jumlah_DM = '$jumlah_diamond',
                PAYMENT = '$payment',
                no_pembayaran = '$payment_number'
              WHERE id = '$id'";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        // Jika sukses, arahkan pengguna ke formhistory.php
        header("Location: formhistory.php");
        exit; // Pastikan script berhenti setelah redirect
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}
?>
