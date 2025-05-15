<?php
session_start();

// Проверяем, авторизован ли пользователь
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
  header("Location: auth.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Профиль пользователя</title>
  <!-- Ваши стили -->
</head>

<body>
  <div class="profile">
    <h1>Добро пожаловать, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>Вы успешно авторизовались в системе.</p>
    <a href="logout.php" class="logout-btn">Выйти</a>
  </div>
</body>

</html>