<?php
require_once('../engine/class.phpmailer.php');
require_once('../engine/class.smtp.php');
//$name = $_POST[‘name’];
//$number = $_POST[‘number’];
//$email = $_POST[‘email’];
// Настройки
$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->Host = "ssl://smtp.yandex.ru"; 
$mail->SMTPAuth = true; 
$mail->Username = "q1Wsg"; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
$mail->Password ="22121987"; // Ваш пароль
$mail->SMTPSecure = "ssl"; 
$mail->Port = 465;
$mail->setFrom("q1Wsg@yandex.ru"); // Ваш Email
 // Email получателя

?>