<?php

require_once('../engine/db_connect.php');
require_once('../engine/funcs.php');
require_once('../engine/sendmail.php');
session_start();
if(isset($_POST['ok'])){
    if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['call'])){
        $login=clear($link,$_POST['login']);
        $password=clear($link,$_POST['password']);
        $name=clear($link,$_POST['name']);
        $call=clear($link,$_POST['call']);
        registration($link,$login,$password,$name,$call);
      
        header('Location:../public_html/logout.php');
    }
    else{
        echo "ошибка в данных";
    }
}
else
{
    echo "ошибка";
    header('Location:../public_html/logout.php');
}
 ?>