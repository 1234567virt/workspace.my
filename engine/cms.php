<?php 
function delet($link,$id){
     mysqli_query($link,"DELETE FROM `product` where='$id'" );
} 
function insert($link,$src,$name,$text,$count){
    mysqli_query($link ,"INSERT INTO `product`( `src`, `name`, `text`, `count`) VALUES
    ('$src','$name','$text','$count'");
}
function update($link,$src,$name,$text,$count){
    mysqli_query($link ,"UPDATE `product` SET `id`='',`src`='$src',
    `name`='$name',`text`='$text',`count`='$count' where id=$id");
}

            
?>