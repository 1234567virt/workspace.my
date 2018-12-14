<?php
require_once '../engine/init.php';
$login='';
$password='';
function registration($link,$login,$password){
  if(isset($login) && isset($password)){
    $login=clear($link,$login);
    $password=clear($link,$password);

   
    $row=mysqli_query($link ,"Select * from `user` where `user_login`='$user' and `user_password`='$password' ");
        header("Location:../public_html/logout.php");
    }
    else{
      echo "Ошибка пустые данные";
    }
    if(password_verify($password,$row['user_password'])){

    }
}
  registration($link,$_POST['login'],$_POST['password']);
 ?>