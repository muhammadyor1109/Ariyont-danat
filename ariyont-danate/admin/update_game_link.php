<?php
session_start();
require '../php/db_connect.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    die("Ruxsat yo‘q!");
}

$id = intval($_POST['id']);
$link = trim($_POST['link_template']);

$stmt = $conn->prepare("UPDATE games SET link_template=? WHERE id=?");
$stmt->bind_param("si", $link, $id);
$stmt->execute();

header("Location: games_links.php");
exit();
?>
