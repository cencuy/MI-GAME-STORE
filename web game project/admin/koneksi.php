<?php
$conn = mysqli_connect("localhost", "root", "", "web_game");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
