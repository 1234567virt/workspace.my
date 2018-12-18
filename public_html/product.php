<!DOCTYPE html>
<?php require_once('../engine/init.php'); ?>
<html lang="ru">
    <head>
    <?php
     $title="Каталог";
      $year=date("Y");
      $id=$_GET['id'];
      $sql="SELECT * FROM `product` WHERE id=$id";
      $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
       ?>
        <meta charset="UTF-8">
        <title><?=$title;?></title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/product.css">
    </head>
    <body>
    <div class='container'>

       <?php
    while ($row = mysqli_fetch_array($result))
  {
      ?>
      <?php $marka=$row['name'];?>
            <img src='<?=$row['src']?>' width='600'  id='img'>
          <?php counts($row['count'],$id,$link,"product");?>
            <div id='title' ><?=$row['name']?></div>
            <div id='long_text' id=''><span id='title_text'> Описание:</span>:<?=$row['text']?></div>
            <div id='count'>
            <center>
            <h4><?=$row['count']?></h4>
            </center></div>
            <?php
            echo $marka ;
            }
?>
    <div style="margin-top:100px">
        <?php
        require_once "../templates/comment_product.php";
        require_once "../templates/form_product.php";
        ?>
    </div>
    <div>
    <?php require_once('../templates/footer.php');?> 
  </body>
  </html>