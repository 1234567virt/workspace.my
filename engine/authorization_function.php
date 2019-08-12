<?php
//session_start();
 require_once('../engine/init.php');
 $login=isset($_POST['log'])?  $_POST['log'] : '';
 $password=isset($_POST['pas'])?  $_POST['pas'] : '';
 if(isset($login) && isset($password)){
    $reg=new Registration();
     $user=$reg->getUserEmail($login); 
    if(password_verify($password,$user['user_password'])){
        echo  $_SESSION['user_id']=$user['id_user'];
        header('Location:/public_html/basket.php');
        }
         else{
             echo 'error password';
         }
        }
       else{
           header('Location:/');
       }
  ?>