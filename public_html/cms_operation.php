<?php 
require_once('../engine/init.php'); 

    $id=$_POST['id'];
      function delet($link,$id){
         mysqli_query($link,"DELETE FROM `product` where `id`='$id'");
        
    } 
    delet($link,$id);



    function insert($link,$src,$name,$text,$count){
        mysqli_query($link ,"INSERT INTO `product`( `src`, `name`, `text`, `count`) VALUES
        ('$src','$name','$text','$count'");
    }

    insert($link,$_POST['src'],$_POST['name'],$_POST['text'],$_POST['count']);



    function update($link,$src,$name,$text,$count){
        mysqli_query($link ,"UPDATE `product` SET `id`='',`src`='$src',
        `name`='$name',`text`='$text',`count`='$count' where id=$id");
    }
   update($link,$_POST['src'],$_POST['name'],$_POST['text'],$_POST['count']);

?>