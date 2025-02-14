<?php
include "koneksi.php";
session_start();
$login_message = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Gunakan prepared statement untuk mencegah SQL injection
    $stmt = $db->prepare("SELECT * FROM user2 WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;

        header("location: index.php");
        exit(); // Menghentikan eksekusi script setelah redirect
    } else {
        $login_message = "Data tidak ditemukan";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="icon" href="jpeg/revo.jpeg">
    <link rel="icon" href="revo.jpeg">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h3 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-container input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-container input:focus {
            outline: none;
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        .login-message {
            color: red;
            margin-bottom: 15px;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            padding: 10px 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
        }
        a{
            position:fixed;
            width: 1500px;
            margin-left: 10px


        }
    </style>
    <title>Login</title>
    
</head>
<body> 
<div class="login-container">
    <h3>LOGIN AKUN </h3>
    <i class="login-message"><?= $login_message ?></i>
    <form action="login.php" method="POST">
        <input type="text" placeholder="Username" name="username" required>
        <input type="password" placeholder="Password" name="password" required>
        <button type="submit" name="login">LOGIN</button>
    </form>
</div>

</body>
</html>
