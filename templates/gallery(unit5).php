<?php
 require_once '../engine/init.php';
 $id=(int)$_GET['id'];
   $product= getRequestsProduct($link);
foreach($product as $key=>$val){
   echo "<a href='product.php?id=".$val['id']."' target='_blank'><img src='".$val['src']."' width='30%' class='catalog' >".$val['count']."</a>";
}  

?>