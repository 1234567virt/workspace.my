<?php

require_once('../engine/requests.php');
require_once('../engine/db_connect.php');
require_once('../engine/funcs.php');
$login=isset($_POST['log'])?  $_POST['log'] : '';
$password=isset($_POST['pas'])?  $_POST['pas'] : '';
$error='';
if(isset($login) && isset($password)){
        $login=$_POST['log'];
        $password=$_POST['pas'];
        $user=getUserEmail($link,$login);
       // var_dump($user);
        if($user){

             if(password_verify($password,$user['user_password'])){
                echo "ok";
               $_SESSION['user_id']=$user['id_user'];
                echo $_SESSION['user_id'];
               
             }
             else{
               $error="INVALID PASSWORD";
            echo $error;
            }
            }
             else {
                 echo "Неверный пользователь или пароль!!!";
        }
}
      
  ?>