<?php
session_start();

// Cek apakah sudah login
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
</head>
<body>
  <h1>Halo, <?= $_SESSION['username']; ?>!</h1>
  <p>Selamat datang di halaman admin.</p>
  <a href="logout.php">Logout</a>
</body>
</html>