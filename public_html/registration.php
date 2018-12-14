<?php

require_once('../engine/db_connect.php');
require_once('../engine/funcs.php');

session_start();
$login=isset($_POST['login'])?  $_POST['login'] : '';
$password=isset($_POST['password'])?  $_POST['password'] : '';
$name=isset($_POST['name'])?  $_POST['name'] : '';
$call=isset($_POST['call'])?  $_POST['call'] : '';
// function registration($link,$login,$password,$name,$call){
//   if(isset($login) && isset($password) && isset($name) && isset($call)){
//     $login=clear($link,$login);
//     $password=clear($link,$password);
//     $name=clear($link,$name);
//     $call=clear($link,$call);
//     $password=password_hash ($password, PASSWORD_BCRYPT);
//     mysqli_query($link ,"INSERT INTO `user`( `user_name`, `user_login`, `user_password`, `u_call`) VALUES
//           ('$name','$login','$password','$call')");
//              header("Location:../public_html/logout.php");
//   }
//   else{
//     echo "Ошибка пустые данные";

//   }
// }

  registration($link,$_POST['login'],$_POST['password'],$_POST['name'],$_POST['call']);

 ?>