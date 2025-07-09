<?php
session_start();
require '../php/db_connect.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    die("Ruxsat yo‘q!");
}

$result = $conn->query("SELECT * FROM games");

echo "<h2>O‘yin donate linklarini boshqarish</h2>";
while($row = $result->fetch_assoc()) {
    echo "<form method='POST' action='update_game_link.php'>
            <input type='hidden' name='id' value='{$row['id']}'>
            <b>{$row['game_name']}</b><br>
            <textarea name='link_template' rows='2' cols='70'>{$row['link_template']}</textarea><br>
            <button type='submit'>Yangilash</button>
          </form><hr>";
}
?>
<a href='../dashboard.php'>Orqaga</a>
