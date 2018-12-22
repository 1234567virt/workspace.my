<?php
 require_once '../engine/init.php';
function delet($link,$id){
   mysqli_query($link,"DELETE FROM `product` where  id='$id'");
} 
   if (isset($_GET['delete'])){
      $id=$_GET['id'];
      $arg1=clear($link,$id);
      delet($link,$id);
      header('Location:../public_html/cms_catalog.php');
   }
   elseif (isset($_GET['insert'])){
      header('Location:../public_html/insert_cms.php');
   }
   elseif (isset($_GET['update'])){
      $id=$_GET['id'];
      header("Location:../public_html/insert_cms.php?id='$id'");
   }
else{
   echo 'ошибка';
}
?>