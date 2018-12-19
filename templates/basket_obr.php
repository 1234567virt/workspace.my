<?php
 require_once '../engine/init.php';
$product= getRequestsProduct($link);

function select_basket($link,$product,$count){
$result=  mysqli_query($link,"SELECT * FROM `product` WHERE `name`='$product' and `number`>='$count'");
$product=[];
while($row = mysqli_fetch_assoc($result)){
    $product[]=$row;

}
return $product;
}



if (isset($_GET['count']) && isset($_GET['product'])){
        $arg1=(int)$_GET['count'];
        $arg2=$_GET['product'];
        $arg1=clear($link,$arg1);
        $arg2=clear($link,$arg2);
        $result=select_basket($link,$arg2,$arg1);
       $user_id= $_SESSION['user_id'];
        echo count($result);
if(count($result)==1){
        insert_basket($link,$_SESSION['user_id'],$arg2,$arg1);
?>
    
        <form style ='margin-top:25px;' action='../public_html/basket.php' method='post'>
       <label> Название:<?=$arg2?></label>
        <label>:<input type="number" name="count" placeholder="количество" style="margin-left:117px;width:60px;height:30px" value='<?=$arg1?>' />Количество</label>
        <input type='hidden' value='".$user_id."'>
         <input type='submit' value='Удалить'>
        <input type='submit' value='Купить'>
        <?php
 }
 else{
    echo "Нехватает продукции";
 }
}

?>