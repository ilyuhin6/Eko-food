<?php
require 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = trim($_POST['email']);

  // Валидация email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Некорректный email');
  }

  try {
    // Проверяем существующий email
    $stmt = $pdo->prepare("SELECT * FROM subscribers WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
      header("Location: index.html?error=already_subscribed");
      exit;
    }

    // Добавляем подписчика
    $stmt = $pdo->prepare("INSERT INTO subscribers (email) VALUES (?)");
    $stmt->execute([$email]);

    // Перенаправляем с флагом успеха
    header("Location: index.php?subscribed=true");
    exit;
  } catch (PDOException $e) {
    die("Ошибка: " . $e->getMessage());
  }
}
