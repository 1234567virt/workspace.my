<?php
 require_once '../engine/init.php';
function registration($link,$login,$password,$name,$call){
  $login=clear($link,$login);
  $password=clear($link,$password);
  $name=clear($link,$name);
  $call=clear($link,$call);

   mysqli_query($link ,"INSERT INTO `user`( `user_name`, `user_login`, `user_password`, `u_call`)
         VALUES
        ('$login','$password','$name','$call')");
      header("Location:../public_html/logout.php");
    }

  registration($link,$_POST['login'],$_POST['password'],$_POST['name'],$_POST['u_call']);
 