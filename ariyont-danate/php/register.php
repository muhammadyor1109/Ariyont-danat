<?php
session_start();
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = trim($_POST['login']);
    $password = hash('sha256', $_POST['password']);

    $stmt = $conn->prepare("INSERT INTO users (login, password, role) VALUES (?, ?, 'user')");
    $stmt->bind_param("ss", $login, $password);

    if ($stmt->execute()) {
        $_SESSION['user_id'] = $stmt->insert_id;
        $_SESSION['role'] = 'user';
        header("Location: ../dashboard.php");
        exit();
    } else {
        error_log("Register Error: " . $stmt->error, 3, "logs/error_log.txt");
        echo "Ro‘yxatdan o‘tishda xatolik.";
    }
}
?>
