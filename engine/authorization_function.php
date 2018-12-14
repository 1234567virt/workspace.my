<?php
require_once '../engine/init.php';
$login='';
$password='';
$error='';

  if(isset($_POST['login']) && isset($_POST['password'])){
       $login=$_POST['login'];
        $password=$_POST['password'];
        $user=getUserEmail($link,$login);
        if($user){

             if(password_verify($password,$user['user_password'])){
                echo "ok;";
                die();
             }
             else{
                 echo "fack";
             }
        }
    }
    else{
  $error='Неверный пользователь или пароль';
    }
  


 ?>