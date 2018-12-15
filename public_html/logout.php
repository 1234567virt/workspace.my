<!DOCTYPE html>
<html lang="ru">
<?php
$title="Вход";
$h1="Вход";
$year=date("Y");
?>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" media="screen" href="./css/styles.css" >
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
        <form class="contact_form" action="./registration.php" method="post" >
    <ul>
 
    </li>
        <label for="login">Login:</label>
            <input type="email" name="login" placeholder="Логин" required />
        
        </li>
        <li>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Пароль" required />
        </li>
      
        <li>
            <label for="name">Имя:</label>
            <input type="text" name="name" placeholder="Имя" required />
       
        </li>
        <li>
            <label for="call">Телефон:</label>
            <input type="number" name="call" placeholder="Телефон" required />
       <li>
             <button class="submit" type="submit" >Отправить</button>
</li>
    </ul>
    </form>
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
