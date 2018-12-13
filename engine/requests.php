<?php
function getRequestsProduct($link){

$sql="SELECT * FROM `product`";
    $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
    $num_rows = mysqli_num_rows( $result);
    $product = [];
    if($num_rows>0){
    while ($row = mysqli_fetch_assoc($result)){
       $product[]=$row;
    }
  }
 return $product;
}

function getRequestsOtziv($link,$marka){
    $sql="SELECT * FROM `otziv_nout` WHERE `marka`='$marka'";
    $result=mysqli_query($link,$sql);
    $num_rows = mysqli_num_rows( $result);
    $answer= [];
    if($num_rows>0){
         while($row = mysqli_fetch_assoc($result)){
            $answer[]=$row;
        }
    }
    return $answer;
}
 ?>