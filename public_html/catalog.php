<!DOCTYPE html>
<?php header('Content-type: text/html; charset=utf-8');?>
<html lang="ru">
    <head>
    <?php 
        $title="Галерея";
        $h1="Санрайс";
        $year=date("Y");
    ?>
    <link rel="stylesheet" href= "./css/style.css">
    <title><?php echo $title ?></title>
  
    </head>
    <body>
   
        <div class='container'>
         
              <?php require_once('../templates/header.php');?>
            <div class='content'>
            <?php  require_once('../templates/bread_crumb.php');?>  
                <h1>
                Каталог
                </h1>
              <div class='container'>
                    <?php
                         require_once "../templates/gallery(unit5).php";
                         require_once "../templates/comment_catalog.php";
                         
                    ?>
                    <hr>
                    <h2>Написать отзыв</h2>
            <?php 
            require_once "../templates/form_catalog.php";
            ?>
     </div>
     <?php require_once('../templates/footer.php');?>
    </body>
</html>
