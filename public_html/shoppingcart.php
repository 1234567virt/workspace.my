<!DOCTYPE html>
<html lang="ru">
<?php
// function insert_basket($link,$user_id,$product_name,$count){
// mysqli_query($link ,"INSERT INTO `basket`( `id_user`, `product_name`, `count`) VALUES
// ('$user_id','$product_name','$count')");
//   }

// function delete_basket($link,$id){
// mysqli_query($link,"DELETE FROM `basket` where='$id'" );
//  } 
//  function delete_basket($link,$id){
// mysqli_query($link,"DELETE FROM `basket` where='$id'" );
// } 

$title="Личный кабинет";
$h1="Купите у нас хоть что-нибудь!!!!";
$year=date("Y");
require_once('../templates/basket.php');
//  $arg1=isset($_POST['count'])?  $_POST['count'] : '';
//  $arg2=isset($_POST['product'])? $_POST['product']: ''; 
$arg1=isset($_GET['id'])? $_GET['id'] : '';
$arg2=isset($_GET['count'])? $_GET['count'] : '';
$error='';

if(isset($_GET['count']) && isset($_GET['id'])){
$arg1=clear($link,$_GET['count']);
$arg2=clear($link,$_GET['id']);
$sql="SELECT * FROM `product` where `id`='$arg2'";
$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
//$num_rows = mysqli_num_rows( $result);
}
?>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/styles.css">
        <!-- <link rel="stylesheet" media="screen" href="./css/styles.css" > -->
    </head>
    <body>
        <div class='container'>
        <?php require_once('../templates/header.php');?>
            <div class='content'>
            <h1 style='margin-top:30px'><?=$user['user_name']?> </span> <?=$h1?></h1>
           <table width="680px" cellspacing="0" cellpadding="5">
                        <tr bgcolor="#ddd">
                           <th width="220" align="left">Изображение</th> 
                           <th width="180" align="left">Название </th> 
                            <th width="100" align="center">Количество </th> 
                           <th width="60" align="right">Цена </th> 
                           <th width="60" align="right">Всего </th> 
                           <th width="90"> </th>
                       </tr>
              <?php
  while ($row = mysqli_fetch_array($result))
  {
 ?>
 <tr>
       <td><img src='<?=$row['src']?>' width="40%"/></td> 
       <td><?=$row['name']?></td> 
       <td align="center"><input type="number" value="<?=$arg1?>" id='select'  /> </td>
       <td align="right"><?=$row['price']?> $</td> 
       <td align="right"><?=$row['price']?>$ </td>
       <td align="center"> <a href="#"><i class="fa fa-lg fa-shopping-basket"></i></a><a href="#" > <img src='img/rm.png' style='width:17px;height:17px'></a> </td>
       </tr>
<?php } ?>
</table>

            <span>Ваш логин:<?=$user['user_login']?></span>
       <form style ="margin-top:25px;" action="../templates/basket.php" method="post">
       
            <label>Продукт: <select name="product" style="width:125px;height:40px"></label>
     <option></option>
   <?php foreach($product as $key=>$val){
    echo "<option>".$val['name']."</option>";   
   }
  ?>
    <label>Количество:<input type="number" placeholder="count" style="margin-left:100px;width:60px;height:30px" name="count" required></label>
    </select>
    <input type="submit" value="Зарезирвировать"></p>
   </form>

        </div>
        <?php require_once('../templates/footer.php');?>
    </body>
</html>
