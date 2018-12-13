<!DOCTYPE html>
<?php require_once '../engine/init.php'; ?>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Каталог товаров</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/size.css">
    </head>
    <body>
  <?php

      $id=(int)$_GET['id'];
      $sql="SELECT * FROM `gallery` WHERE id=$id";
         $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
       while ($row = mysqli_fetch_array($result))
     {
        echo "<img src='".$row['img']."' id='size'>";
        echo "<div id='count'>".$row['count']."</div>";
        counts($row['count'],$id,$link,"`gallery");
      }
?>
  </body>
  </html>