<?php
$host = "localhost"; // Sesuaikan dengan host database
$user = "root"; // Sesuaikan dengan username database
$password = ""; // Sesuaikan dengan password database (kosongkan jika default)
$database = "web_game"; // Sesuaikan dengan nama database

$db = new mysqli($host, $user, $password, $database);

if ($db->connect_error) {
    die("Koneksi gagal: " . $db->connect_error);
}
?>
