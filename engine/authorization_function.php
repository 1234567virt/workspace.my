<?php
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
            ?>
           <meta http-equiv='refresh' content=5;URL='/public_html/autorization.php'/>
            <?php 
            }
        }
       else{
    
           header('Location:/');
       }
  ?>