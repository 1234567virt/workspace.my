<?php
require_once('../engine/db_connect.php');
require_once('../engine/funcs.php');
require_once('../engine/mail.php');
session_start();
if($_POST['ok']){
    if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['call'])){
        $login=clear($link,$_POST['login']);
        $password=clear($link,$_POST['password']);
        $name=clear($link,$_POST['name']);
        $call=clear($link,$_POST['call']);
        registration($link,$login,$password,$name,$call);
        $headers='From:vitte@gmail.ru'."\r\n".
        'Replay-To:vitte@bk.com'."\r\n".
        'X-Mailer:PHP/'.phpversion();
        $message="Поздравляю вас с получением учетной записи на нашем сайте ваш логин ";
        mail($login,"Ваш логин и пароль",$message);
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