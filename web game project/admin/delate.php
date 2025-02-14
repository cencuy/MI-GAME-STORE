<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Mengubah id ke integer untuk keamanan

    // Query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM format WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Jika berhasil, redirect dengan pesan sukses
        header("Location: formhistory.php?message=Data berhasil dihapus!");
        exit;
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Terjadi kesalahan saat menghapus data: " . $stmt->error;
    }

    $stmt->close();
} else {
    // Jika tidak ada ID, redirect dengan pesan error
    header("Location: formhistory.php?message=ID tidak valid!");
    exit;
}
?>
