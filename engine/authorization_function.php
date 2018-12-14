<?php
require_once '../engine/init.php';
function registration($link,$login,$password){
  if(isset($login) && isset($password)){
    $login=clear($link,$login);
    $password=clear($link,$password);

   
    mysqli_query($link ,"Select * from `user` where `user_login`='$user' and `user_password`='$password' ");
        header("Location:../public_html/logout.php");
    }
    else{
      echo "Ошибка пустые данные";
    }
}
  registration($link,$_POST['login'],$_POST['password']);
 ?>