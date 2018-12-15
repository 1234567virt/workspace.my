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
            <h1 style='margin-top:30px'><?=$user['user_name']?> </span> <?=$h1?></h1>
            <!-- <span>Ваше имя:<?=$user['user_name']?></span><br> -->
            <span>Ваш логин:<?=$user['user_login']?></span>
       <form style ="margin-top:25px;" action="basket.php" method="post">
     
   <label>Продукт: <select name="product"></label>
     <option></option>
   <?php foreach($product as $key=>$val){
    echo "<option>".$val['name']."</option>";   
   }
  ?>
    <label>Количество:<input type="number" placeholder="count"  name="count" required></label>
    </select>
    <input type="submit" value="Зарезирвировать"></p>
   </form>
   <?php
  
  if (isset($_POST['count']) && isset($_POST['product'])){
    $arg1=(int)$_POST['count'];
    $arg2=$_POST['product'];
      $arg1=clear($link,$arg1);
        $arg2=clear($link,$arg2);
      echo "<label> Название:".$arg2."</label>";
      echo ' <lable>Количество:<input type="number" name="count" placeholder="количество"  value="'.$arg1.'" /></label>';
      echo "  <p><input type='submit' value='Remove'>";
      echo "  <input type='submit' value='Ok'></p>";
   }
      ?>
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
