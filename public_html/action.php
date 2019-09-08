<?php
 require_once '../engine/init.php'; 
$destination=21;
 $obj=new CMS();
    if (isset($_GET['action'])==true and $_GET['action']=='delete'){
      $obj->delet($_GET['id']);
     }
   elseif (isset($_POST['action']) and $_POST['action']=='insert'){
    $obj->insert($destination,$_POST['name'],$_POST['text'],$_POST['number'],$_POST['price']);
  
      }
   elseif (isset($_POST['action']) and $_POST['action']=='update'){
       $obj->update($_POST['idupdate'],$_POST['countupdate'], $destination,$_POST['nameupdate'],$_POST['textupdate'],$_POST['numberupdate'],$_POST['priceupdate']);
       header("Location:../public_html/cms_catalog.php");
   }
   else{
       echo 'ошибка';

   }
?>