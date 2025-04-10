<?php
  // Mulai session jika belum dimulai
  session_start();

  // Jika sudah login, langsung arahkan ke halaman admin
  if (isset($_SESSION['username'])) {
      header("Location: admin.php");
      exit();
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <style>
    body {
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: #f1f1f1;
    }
    .login-box {
      background: white;
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px #aaa;
      width: 300px;
    }
    .login-box h2 {
      text-align: center;
    }
    .login-box input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .login-box button {
      width: 100%;
      padding: 10px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    .login-box button:hover {
      background: #0056b3;
    }
    .error {
      color: red;
      font-size: 14px;
      text-align: center;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login Admin</h2>
    <?php
      // Tampilkan pesan error jika ada
      if (isset($_SESSION['error'])) {
          echo '<div class="error">' . $_SESSION['error'] . '</div>';
          unset($_SESSION['error']);
      }
    ?>
    <form action="proses_login.php" method="post">
      <input type="text" name="username" placeholder="Username" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>