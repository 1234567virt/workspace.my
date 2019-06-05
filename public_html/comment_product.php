<?php
require_once '../engine/init.php'; 
$id=$_POST['id'];
$marka=$_POST['marka'];
$sql="SELECT `otziv_nout`.* FROM `product` left join
 `otziv_nout` on `otziv_nout`.`name`=`product`.`name` where `product`.id='$id'";
echo $sql;
 $massiv=mysqli_query($link,$sql);
 //$answer=getRequestsOtziv($link,$marka);
 //echo "<br>";
//        foreach($massiv as $key=>$rower){
//            echo "<hr>";
//            echo "Автор:".$rower['Aftor']."<br>";
//            echo "Текст:".$rower['text']."<br>";
//      }
//var_dump($answer);
while($rower = mysqli_fetch_array($massiv)){
      echo "<hr>";
       
         echo "Автор:".$rower['Aftor']."<br>";
         echo "Текст:".$rower['text']."<br>";
        
   }
   
?>