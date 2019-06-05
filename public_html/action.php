<?php
// require_once '../engine/init.php'; 
// $id=$_GET['id'];
// $sql="delete FROM `product`  where `product`.id='$id'";
require_once '../engine/cms_autoload.php';
//  $massiv=mysqli_query($link,$sql);
require_once '../engine/init.php';

if (isset($_GET['action'])=='delete'){
   $id=$_GET['id'];
   $arg1=clear($link,$id);
   delet($link,$id);
   //header('Location:../public_html/cms_catalog.php');
}
elseif (isset($_POST['action'])=='insert'){
 
  

insert($link,$path,$_POST['name'],$_POST['text'],$_POST['number'],$_POST['price']);
  // header('Location:../public_html/insert_cms.php');
}
elseif (isset($_POST['action'])=='update'){
   $id=$_GET['id'];
   header("Location:../public_html/insert_cms.php?id='$id'");
}
else{
echo 'ошибка';
}
?>

         
        
        
       
        
        