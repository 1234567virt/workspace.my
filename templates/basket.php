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

function insert_basket($link,$user_id,$product_name,$count){
    mysqli_query($link ,"INSERT INTO `basket`( `id_user`, `product_name`, `count`) VALUES
    ('$user_id','$product_name','$count')");
  }

//   function delete_basket($link,$id){
//     mysqli_query($link,"DELETE FROM `basket` where='$id'" );
// } 

if (isset($_POST['count']) && isset($_POST['product'])){
        $arg1=(int)$_POST['count'];
        $arg2=$_POST['product'];
        $arg1=clear($link,$arg1);
        $arg2=clear($link,$arg2);
        $result=select_basket($link,$arg2,$arg1);
       $user_id= $_SESSION['user_id'];
   // var_dump($result);
        echo count($result);
if(count($result)==1){
        insert_basket($link,$_SESSION['user_id'],$arg2,$arg1);

        echo "<form style ='margin-top:25px;'' action='../public_html/basket.php' method='post'>";
        echo "<label> Название: ".$arg2."</label>";
        echo '<lable>:<input type="number" name="count" placeholder="количество"
        style="margin-left:117px;width:60px;height:30px" value="'.$arg1.'" />Количество</label>';
        echo "<input type='hidden' value='".$user_id."'>";
        echo "  <input type='submit' value='Удалить'>";
        echo "  <input type='submit' value='Купить'>";
 }
 else{
    echo "Нехватает продукции";
 }
}

?>