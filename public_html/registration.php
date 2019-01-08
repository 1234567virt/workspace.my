<?php
require_once('../engine/db_connect.php');
require_once('../engine/funcs.php');
require_once('../engine/sendmail.php');
session_start();
if($_POST['ok']){
    if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['call'])){
        $login=clear($link,$_POST['login']);
        $password=clear($link,$_POST['password']);
        $name=clear($link,$_POST['name']);
        $call=clear($link,$_POST['call']);
        registration($link,$login,$password,$name,$call);
        $mail->isHTML(true); 
        $mail->addAddress($login);
        $mail->Subject = "Регистрация"; // Заголовок письма
        $mail->Body = "Имя $name . Телефон $ncall . Почта $login"; // Текст письма
        // Результат
        if(!$mail->send()) {
         echo 'Message could not be sent.';
         echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
         echo 'ok';
        }
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