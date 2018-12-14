<!DOCTYPE html>
<html lang="ru">
<?php
$title="Корзина";
$h1="Корзина";
$year=date("Y");
require_once('../templates/basket.php');
?>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="./css/style.css">
        <!-- <link rel="stylesheet" media="screen" href="./css/styles.css" > -->
    </head>
    <body>
        <div class='container'>
         <div class="header">
            <img src='./img/logo.jpeg' alt='SonyValio' class='logo'>
            <ul>
                  <?php
                  require_once('../templates/menu.php');
             
                  ?>
            </ul>
            <hr>
        
        </div>
       
        
        <div class='content'>
            <h1><?=$h1?></h1>
        <form class="contact_form" action="./basket.php" method="post" >
             <label >Товар:
                <select name="product" placeholder="Продукты" required>
                <?php
                 foreach($product as $key=>$val){
                     echo "<option>".$val['name']."</option>";
                 }  
              ?>
            </label>
            <label >Количество:</label>
            <input type="number" name="count" placeholder="количество"  value='<?= $count?>'required />
      <span></span>
            <button class="submit" type="submit" >Купить</button>
       <button class="submit" type="submit" >Удалить</button>
        </form>
        <img src=''>
        </div>
    <div class='footer'> 
                <hr>
                <strong>
                   Все права защищены<sup>&copy;</sup> <?php echo $year; ?>
                </strong>
            </div>   
        </div>
    </body>
</html>
