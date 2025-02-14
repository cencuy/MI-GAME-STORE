<?php
include "koneksi.php";

$id = $_POST ['id_game'];
$server = $_POST ['server'];
$nickname = $_POST ['nick_name'];
$jumlah = $_POST ['jumlah_diamond'];
$payment = $_POST ['payment'];
$payment_number = $_POST['payment_number'];

// ... (database connection details)

// ... (retrieve form data)

// Prepare and execute SQL statement
$sql = "INSERT INTO format (id_game, id_server, Nick_Name, Jumlah_DM, PAYMENT,no_pembayaran) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $id, $server, $nickname, $jumlah, $payment,$payment_number);

if ($stmt->execute()) {
 
    $mesage =  "Data inserted successfully!";
    include "struk.php" ;

}
 else {
    echo "Error: " . $stmt->error;
}
?>