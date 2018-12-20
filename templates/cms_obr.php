<?php
 require_once '../engine/init.php';
//$product= getRequestsProduct($link);

function delet($link,$id){
   mysqli_query($link,"DELETE FROM `product` where='$id'");
} 
function insert($link,$src,$name,$text,$count){
   mysqli_query($link ,"INSERT INTO `product`( `src`, `name`, `text`, `count`) VALUES
   ('$src','$name','$text','$count'");
}
function update($link,$src,$name,$text,$count){
   mysqli_query($link ,"UPDATE `product` SET `id`='',`src`='$src',
   `name`='$name',`text`='$text',`count`='$count' where id=$id");
}

if (isset($_GET['id']) && isset($_GET['delete'])){
                $id=$_GET['id'];
                $arg1=clear($link,$id);
                delet($link);
                echo "1";
}

        elseif (isset($_GET['insert'])){
                insert($link,$src,$name,$text,$count);
                echo "2";
}

        elseif (isset($_GET['update'])){
                update($link,$src,$name,$text,$count);
                echo "3";
 }


?>