<?php
 function insert_basket($link,$user_id,$src,$name,$price,$count,$ids){
    mysqli_query($link ,"INSERT INTO `basket` ( `id_product`,`id_user`, `src`, `name`, `price`, `count`) VALUES ('$ids',$user_id,'$src','$name',$price,$count)");
    
 }
  
  function delete_basket($link,$id){
    mysqli_query($link,"DELETE FROM `basket` where `id`='$id'" );
} 
function getSelectProducts($link,$id){
 $result=mysqli_query($link,"SELECT * FROM `product` where `id`=$id" ) or die("Ошибка " . mysqli_error($link)); 
  return $result;
} 



?>  