<?php
if(isset($_POST['ok'])){
     
     if(isset($_GET['id'])!=''){
         
         
         update($link,$_POST['id'],$path,$_POST['name'],$_POST['text'],$_POST['number'],$_POST['price']);
     header('Location:../public_html/cms_catalog.php');
     }
         else{
         
       
     insert($link,$path,$_POST['name'],$_POST['text'],$_POST['number'],$_POST['price']);
      header('Location:../public_html/cms_catalog.php');
         }
  }
  ?>