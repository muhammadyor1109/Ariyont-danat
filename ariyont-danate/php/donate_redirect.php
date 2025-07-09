<?php
session_start();
require 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}

$user_game_id = trim($_POST['game_user_id']);
$amount = intval($_POST['amount']);
$game = trim($_POST['game']);

// O'yin linkini olish
$stmt = $conn->prepare("SELECT link_template FROM games WHERE game_name=?");
$stmt->bind_param("s", $game);
$stmt->execute();
$stmt->bind_result($template);
$stmt->fetch();
$stmt->close();

// Linkni to'ldirish
$final_link = str_replace("{id}", urlencode($user_game_id), $template);
$final_link = str_replace("{sum}", $amount, $final_link);

// Donate yozish
$stmt = $conn->prepare("INSERT INTO donations (user_id, game, game_id, amount, date) VALUES (?, ?, ?, ?, NOW())");
$stmt->bind_param("issi", $_SESSION['user_id'], $game, $user_game_id, $amount);
$stmt->execute();

// Yuborish
header("Location: $final_link");
exit();
?>
