<!DOCTYPE html>
<?php require_once('../engine/init.php');
require_once('../engine/basket_funcs.php');
?>
<html lang="ru">
    <head>
    <?php
     $title="Каталог";
      $year=date("Y");
      $id=clear($link,$_GET['id']);
      $id=$_GET['id'];
      
  
    $result= getSelectProducts($link,$id);
       ?>
        <meta charset="UTF-8">
        <title><?=$title;?></title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/product.css">
    </head>
    <body>
    <div class='container'>

       <?php while ($row = mysqli_fetch_array($result)){?>
      <?php $marka=$row['name'];
      
         require_once "../templates/product/product_detal.php";
            } ?>
     <div style="margin-top:100px">
    <?php
        require_once "../templates/product/comment_product.php";
        require_once "../templates/product/form_product.php";
    ?>
    </div>
    <div>
</body>
  </html>