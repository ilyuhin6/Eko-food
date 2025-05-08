<?php
// Убедитесь, что НИЧЕГО нет перед <?php (даже пробелов/переносов)
header('Content-Type: application/json; charset=utf-8');
// Ваши данные бота Telegram
$token = '7340250234:AAFQbOaMOcEyovNU42ukC8oHQi3B3NGC1DU';
$chat_id = '-1002498990517';

$text = "Новое сообщение:\n";
foreach ($_POST as $key => $value) {
  $text .= "$key: $value\n";
}

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text));
