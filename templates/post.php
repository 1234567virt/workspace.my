<?php 
 require_once '../engine/init.php';  
    if(isset($_POST['marka'])){
         review_nout($link,$_POST['Aftor'],$_POST['Message'],$_POST['id'],$_POST['marka']);
    }
     else{
         rewiev($link,$_POST['Aftor'],$_POST['Message'],$_POST['id']);
    }
   ?>