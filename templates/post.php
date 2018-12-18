<?php 
 require_once '../engine/init.php'; 

 echo $_POST['Aftor']."<br>";
 echo $_POST['Message']."<br>";
 echo $_POST['id']."<br>";
 echo $_POST['marka']."<br>";
  //  if(isset($_POST['marka'])){
     review_nout($link,$_POST['Aftor'],$_POST['Message'],$_POST['id'],$_POST['marka']);
     // review_nout($link,$Aftor,         $Message,         $id,         $marka){
  ///  }
  //   else{
  //       rewiev($link,$_POST['Aftor'],$_POST['Message'],$_POST['id']);
  //  }
   ?>