<?php

/* https://api.telegram.org/bot1122057270:AAHnMbwUX7xPU0GspK_YFZ6nD2rF3qD6Q2Q/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$token = "1122057270:AAHnMbwUX7xPU0GspK_YFZ6nD2rF3qD6Q2Q";
$chat_id = "-495084138";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>