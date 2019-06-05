<?php
 require_once '../engine/init.php';

   if (isset($_GET['post'])=='delete'){
      $id=$_GET['id'];
      $arg1=clear($link,$id);
      delet($link,$id);
      header('Location:../public_html/cms_catalog.php');
   }
   elseif (isset($_GET['post'])=='insert'){
      header('Location:../public_html/insert_cms.php');
   }
   elseif (isset($_GET['post'])=='update'){
      $id=$_GET['id'];
      header("Location:../public_html/insert_cms.php?id='$id'");
   }
else{
   echo 'ошибка';
}
echo $_GET['post'];
?>