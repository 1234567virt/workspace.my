<?php
require_once('../engine/init.php');
  $login=isset($_POST['login'])?  $_POST['login'] : '';
  $password=isset($_POST['password'])?  $_POST['password'] : '';
  $result=array();
  if(isset($login) && isset($password)){
    $reg=new Registration();
     $user=$reg->getUserEmail($login); 
    if(password_verify($password,$user['user_password'])){
        $_SESSION['user_id']=$user['id_user'];
        $result['data']="/public_html/basket.php";
        echo stripslashes(json_encode($result));
        }
         else{
            
             $result['data']="error";
             echo stripslashes(json_encode($result));
            }
        }
        else{
    
            header('Location:/');
        }
  ?>