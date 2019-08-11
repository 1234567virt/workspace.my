<?php
 require_once '../engine/init.php'; 
$obj=new CMS();
  if (isset($_GET['action'])=='delete'){
      $obj->delet($_GET['id']);
    }

  elseif (isset($_POST['action'])=='insert'){
    $obj->insert($path,$_POST['name'],$_POST['text'],$_POST['number'],$_POST['price']);
  }
  elseif (isset($_POST['action'])=='update'){
    $id=$_GET['id'];
    header("Location:../public_html/insert_cms.php?id='$id'");
  }
  else{
   echo 'ошибка';
  }
?>

         
        
        
       
        
        