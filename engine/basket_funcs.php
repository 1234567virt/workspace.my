<?php
 function insert_basket($link,$idproduct,$user_id,$count){
    mysqli_query($link ,"INSERT INTO `basket` (`id_product`,`id_user`, `count`) VALUES ('$idproduct',$user_id,$count)");
    
 }
  
  function delete_basket($link,$id){
    mysqli_query($link,"DELETE FROM `basket` where `id`='$id'" );
} 
function getSelectProducts($link,$id){
 $result=mysqli_query($link,"SELECT * FROM `product` where `id`=$id" ) or die("Ошибка " . mysqli_error($link)); 
  return $result;
} 



?>  