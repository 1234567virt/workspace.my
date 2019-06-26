<?php
session_start();
require_once('../engine/init.php');
if(isset($_POST['ok'])){
    $reg=new Registration();  
  if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['call'])){
       $reg->regis($_POST['login'],$_POST['password'],$_POST['name'],$_POST['call']);
     header('Location:../public_html/autorization.php');
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