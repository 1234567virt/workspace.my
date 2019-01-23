<?php
session_start();
require_once('../engine/db_connect.php');
require_once('../engine/funcs.php');
//require_once('../engine/sendmail.php');

if(isset($_POST['ok'])){
    if(isset($_POST['captcha'])== $_SESSION["img_code"]){
  
    if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['call'])){
        $login=clear($link,$_POST['login']);
        $password=clear($link,$_POST['password']);
        $name=clear($link,$_POST['name']);
        $call=clear($link,$_POST['call']);
        registration($link,$login,$password,$name,$call);
    //     $headers='From:vitte@gmail.ru'."\r\n".
    //     'Replay-To:vitte@bk.com'."\r\n".
    //     'X-Mailer:PHP/';
    //   $message="Номер вашего заказа ";
       // mail('vitte@bk.ru',"Ваш заказ ",$message);
      // $mail->send();
        header('Location:../public_html/logout.php');
    
    }
    else{
        echo "ошибка в данных";
    }
    
}
}
else
{
    echo "ошибка";
    header('Location:../public_html/logout.php');
}
 ?>