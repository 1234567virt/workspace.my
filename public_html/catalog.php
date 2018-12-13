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
             <div class="header">
             <img src='./img/logo.jpeg' alt='SonyValio' class='logo'>
                <ul>
                   <?php  require_once('../templates/menu.php');?>    
                </ul>
                <hr>
            </div>
             
            <div class='content'>
                       <ul>
                            <li><a href="index.html">Главная</a></li>
                            <li><a href="catalog.html">Каталог</a></li>
                       </ul>
                <h1>
                Каталог
                </h1>
              <div class='container'>
                    <?php
                         require_once "../templates/gallery(unit5).php";
                         require_once "../templates/otziv.php";
                         
                    ?>
                    <hr>
                    <h2>Написать отзыв</h2>
            <?php 
            require_once "../templates/form_rev.php";
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
