<?php
require_once '../engine/init.php'; 
$id=$_POST['id'];
//$marka=$_POST['marka'];
//$sql="SELECT `otziv_nout`.* FROM `product` left join
 //`otziv_nout` on `otziv_nout`.`name`=`product`.`name` where `product`.id='$id'";
 $comment_product=new Comment();
$result=$comment_product->Comments_product($id);
//$massiv=mysqli_query($link,$sql);
foreach($result as $key=>$rower) {
         echo "<hr>";
         echo "Автор:".$rower['Aftor']."<br>";
         echo "Текст:".$rower['text']."<br>";
        
   }
   
?>