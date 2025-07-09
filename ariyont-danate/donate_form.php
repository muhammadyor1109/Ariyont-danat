<?php
session_start();
require 'php/db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Donate Qilish | Ariyont</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
  <h2>💸 Donate Qilish</h2>
  <form action="php/donate_redirect.php" method="POST">

    <label>O‘yin Tanlang:</label>
    <select name="game" required>
      <?php
      $result = $conn->query("SELECT game_name FROM games");
      while ($row = $result->fetch_assoc()) {
          echo "<option value='{$row['game_name']}'>{$row['game_name']}</option>";
      }
      ?>
    </select>

    <label>O‘yin Ichidagi ID:</label>
    <input type="text" name="game_user_id" required>

    <label>Summani kiriting (so‘m):</label>
    <input type="number" name="amount" min="1000" required>

    <button type="submit">Donate qilish</button>
  </form>

  <p><a href="dashboard.php">⬅ Orqaga</a></p>
</div>
<script src="assets/js/script.js"></script>

</body>
</html>
