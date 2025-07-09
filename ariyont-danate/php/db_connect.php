<?php
// Error reporting
ini_set('display_errors', 0);
error_reporting(E_ALL);

// Bazaga ulanish
$servername = "localhost";
$username = "root";
$password = "";
$database = "ariyont";

$conn = new mysqli($servername, $username, $password, $database);

// Xatolik log qilish
if ($conn->connect_error) {
    error_log("DB Connection Error: " . $conn->connect_error, 3, "logs/error_log.txt");
    die("Bazaga ulanishda xatolik.");
}

// Xarakter to'g'rilash
$conn->set_charset("utf8mb4");
?>
