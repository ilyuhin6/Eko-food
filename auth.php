<?php
session_start();
$errors = $_SESSION['errors'] ?? [];
$form_data = $_SESSION['form_data'] ?? [];
unset($_SESSION['errors']);
unset($_SESSION['form_data']);

if (!empty($errors)) {
  echo '<div class="auth__errors">';
  foreach ($errors as $error) {
    echo '<p class="auth__error">' . htmlspecialchars($error) . '</p>';
  }
  echo '</div>';
}
