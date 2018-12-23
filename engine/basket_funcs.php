<?php
 function insert_basket($link,$user_id,$product_name,$count){
    mysqli_query($link ,"INSERT INTO `basket`( `id_user`, `product_name`, `count`) VALUES
    ('$user_id','$product_name','$count')");
  }
  function delete_basket($link,$id){
    mysqli_query($link,"DELETE FROM `basket` where='$id'" );
} 
function getSelectProduct($link,$id){
 $result=mysqli_query($link,"SELECT * FROM `product` where `id`='$id'" ) or die("Ошибка " . mysqli_error($link)); 
  return $result;
} 
?>  