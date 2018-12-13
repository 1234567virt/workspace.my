<!DOCTYPE html>
<?php require_once('../engine/init.php'); ?>
<html lang="ru">
    <head>
    <?php
 

  $year=date("Y");
      $id=$_GET['id'];
      $sql="SELECT * FROM `product` WHERE id=$id";
      $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
?>
        <meta charset="UTF-8">
        <title>Каталог товаров</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/product.css">
    </head>
    <body>
    <div class='container'>

       <?php
while ($row = mysqli_fetch_array($result))
  {
$marka=$row['name'];
    echo "<img src='".$row['src']."' width='600'  id='img'>";
     counts($row['count'],$id,$link,"product");
     echo "<div id='title' >".$row['name']."</div>";
     echo "<div id='long_text' id=''><span id='title_text'> Описание:</span>:".$row['text']."</div>";
     echo "<div id='count'><center><h4>". $row['count']."</h4></center></div>";
    }
?>
<div style="margin-top:100px">
<?php
require_once "../templates/otziv_nout.php";
require_once "../templates/form_nout.php";
?>
</div>

<div>
     <div class='footer'> 
                <hr>
                <strong>
                   Все права защищены<sup>&copy;</sup><?php echo $year;?>
                </strong>
            </div>   
  </body>
  </html>