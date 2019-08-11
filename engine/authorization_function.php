<?php
//session_start();
 require_once('../engine/init.php');
 $login=isset($_POST['log'])?  $_POST['log'] : '';
 $password=isset($_POST['pas'])?  $_POST['pas'] : '';
 if(isset($login) && isset($password)){
           $reg=new Registration();
           $reg->open_basket($login,$password);
          // echo $login;
         //header('Location:../public_html/basket.php');
        }
       else{
           header('Location:/');
       }
  ?>