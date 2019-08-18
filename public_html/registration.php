<?php
require_once('../engine/init.php');
if(isset($_POST['ok'])){
    $reg=new Registration();  
  if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['call'])){
       $reg->regis($_POST['login'],$_POST['password'],$_POST['name'],$_POST['call']);
     header('Location:../public_html/autorization.php');
    }
    else{
        echo "ошибка в данных";
        ?>
        <meta http-equiv='refresh' content=5;URL='/public_html/logout.php'/><?php
       
    }
}
else
{
    echo "ошибка";
    sleep();
    header('Location:../public_html/logout.php');
}
 ?>