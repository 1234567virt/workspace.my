<?php
//session_start();
 require_once('../engine/init.php');
 $login=isset($_POST['log'])?  $_POST['log'] : '';
 $password=isset($_POST['pas'])?  $_POST['pas'] : '';
 if(isset($login) && isset($password)){
           $reg=new Registration();
          
           $user=$reg->getUserEmail($login); 
           //var_dump($user['user_password']);
         
           //echo $user['user_password'];
           if(password_verify(123,$user['user_password'])){
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