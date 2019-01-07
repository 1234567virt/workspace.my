<?php
require_once('../engine/db_connect.php');
require_once('../engine/funcs.php');
require_once('../PHPMailer/.php');
session_start();
if($_POST['ok']){
    if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['call'])){
        $login=clear($link,$_POST['login']);
        $password=clear($link,$_POST['password']);
        $name=clear($link,$_POST['name']);
        $call=clear($link,$_POST['call']);
        registration($link,$login,$password,$name,$call);
        $mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;

$mail->Host = "ssl://smtp.mail.ru";
$mail->Port = 465;
$mail->Username = "vitte@bk.ru";
$mail->Password = "20xmaxW95";

// От кого
$mail->setFrom('admin@workspace.ru', 'workspace.ru');        

// Кому
$mail->addAddress($login, $name);

// Тема письма
$mail->Subject = $subject;

// Тело письма
$body = '<p><strong>Ваш логин'.$login.'</strong></p>';
$mail->msgHTML($body);
    }
    else{
        header('Location:../public_html/logout.php');
    }

}
else
{
    header('Location:../public_html/logout.php');
}
 ?>