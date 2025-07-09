<?php
session_start();
require '../php/db_connect.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    die("Ruxsat yo‘q!");
}

$result = $conn->query("SELECT u.login, SUM(d.amount) as total_amount 
FROM donations d 
JOIN users u ON d.user_id = u.id 
GROUP BY d.user_id 
ORDER BY total_amount DESC 
LIMIT 20");

echo "<h2>Top Donate Reyting</h2>";
$rank = 1;
while($row = $result->fetch_assoc()) {
    echo "#$rank: <b>{$row['login']}</b> → {$row['total_amount']} so‘m<br>";
    $rank++;
}
?>
<a href='../dashboard.php'>Orqaga</a>
