<?php
session_start();
require '../php/db_connect.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    die("Ruxsat yo‘q!");
}

$result = $conn->query("SELECT d.id, u.login, d.game, d.game_id, d.amount, d.date 
FROM donations d 
JOIN users u ON d.user_id = u.id 
ORDER BY d.date DESC");

echo "<h2>Donate Tarixi</h2>";
while($row = $result->fetch_assoc()) {
    echo "[{$row['date']}] <b>{$row['login']}</b> → <i>{$row['game']}</i> (ID: {$row['game_id']}) → {$row['amount']} so‘m<br>";
}
?>
<a href='../dashboard.php'>Orqaga</a>
