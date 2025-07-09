<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

echo "<h2>Salom, ".$_SESSION['role']."</h2>";

if ($_SESSION['role'] == 'admin') {
    echo "<a href='admin/games_links.php'>Donate Linklar</a> | ";
    echo "<a href='admin/users.php'>Foydalanuvchilar</a> | ";
    echo "<a href='admin/donations.php'>Donate Tarixi</a> | ";
    echo "<a href='admin/leaderboard.php'>Reyting</a> | ";
}
echo "<a href='logout.php'>Chiqish</a>";
?>
