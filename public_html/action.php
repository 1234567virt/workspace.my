<?php
 require_once '../engine/init.php'; 
 $obj=new CMS();
    if (isset($_GET['action'])==true and $_GET['action']=='delete')
     {
      $obj->delet($_GET['id']);
     }
   elseif (isset($_POST['action']) and $_POST['action']=='insert')
      {
  $result= $obj->insert($_SESSION['file'],$_POST['name'],$_POST['text'],$_POST['count'],$_POST['price']);
 
      }
   elseif (isset($_POST['action']) and $_POST['action']=='update')
      {
       $obj->update($_POST['idupdate'],$_POST['countupdate'],$_SESSION['file'],  $_POST['nameupdate'],$_POST['textupdate'],$_POST['numberupdate'],$_POST['priceupdate']);
       header("Location:../public_html/cms_catalog.php");
      }
   else
     {
       echo 'ошибка';

     }
?>