<!DOCTYPE html>
<html lang="ru">
<?php
$title="Главная";
$h1="Санрайс";
$year=date("Y");

?>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="./css/style.css">
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
            
        <h1>
         <?php echo $h1 ?>
        </h1>
        
        <h4>
            <i>Покупай или проиграешь</i><br>
            <i>Черная пятница <?php echo $year; ?> года</i>
        </h4>
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
