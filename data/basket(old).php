<!DOCTYPE html>
<html lang="ru">
<?php
$title="Личный кабинет";
$h1="Купите у нас хоть что-нибудь!!!!";
$year=date("Y");
require_once('../templates/basket.php');
$arg1=isset($_POST['count'])?  $_POST['count'] : '';
$arg2=isset($_POST['product'])? $_POST['product']: ''; 
$error='';
if(isset($_POST['count']) && isset($_POST['id'])){
    function delete_basket($link,$id){
        mysqli_query($link,"DELETE FROM `basket` where='$id'" );
    } 
    delete_basket($link,$id);
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
