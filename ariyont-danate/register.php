<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Ro‘yxatdan o‘tish | Ariyont</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
  <h2>📝 Ro‘yxatdan o‘tish</h2>
  <form action="php/register.php" method="POST">

    <label>Login:</label>
    <input type="text" name="login" required>

    <label>Parol:</label>
    <input type="password" name="password" required>

    <button type="submit">Ro‘yxatdan o‘tish</button>
  </form>

  <p>Hisobingiz bormi? <a href="index.php">Kirish</a></p>
</div>
<script src="assets/js/script.js"></script>

</body>
</html>
