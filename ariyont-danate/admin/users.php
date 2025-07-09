<?php
session_start();
require '../php/db_connect.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    die("Ruxsat yo‘q!");
}

$result = $conn->query("SELECT id, login, role FROM users");

echo "<h2>Foydalanuvchilar ro‘yxati</h2>";
while($row = $result->fetch_assoc()) {
    echo "ID: {$row['id']} | Login: {$row['login']} | Role: {$row['role']}<br>";
}
?>
<a href='../dashboard.php'>Orqaga</a>
