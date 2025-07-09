<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Ariyont Game Donate</title>

  <!-- Favicon va manifest -->
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
  <link rel="manifest" href="assets/images/site.webmanifest">
  <meta name="theme-color" content="#0b0f1c">

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <div class="container">
    <h1>🕹️ Ariyont Game Donate Tizimi</h1>
    <p>O'yinlarga donate qilish va reyting bo'yicha peshqadam bo'lish uchun tizimga kir!</p>

    <!-- Login form -->
    <form action="php/login.php" method="POST">
      <input type="text" name="login" placeholder="Login" required>
      <input type="password" name="password" placeholder="Parol" required>
      <button type="submit">Kirish</button>
    </form>

    <p>Yangi foydalanuvchimisiz? <a href="register.php">Ro‘yxatdan o‘tish</a></p>

    <!-- Admin panel link (faqat admin uchun) -->
    <!-- Bu joy PHP sessiya bilan ko'rsatiladi, front uchun hozircha -->
    <p style="margin-top:20px;"><a href="admin/games_links.php">[Admin panel]</a></p>

    <!-- Sahifa haqida -->
    <p style="margin-top:30px; font-size:12px;">&copy; 2025 Ariyont AI Game Donate. Barcha huquqlar himoyalangan.</p>
  </div>

  <!-- JS -->
  <script src="assets/js/script.js"></script>

</body>
</html>
