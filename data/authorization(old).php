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
        <?php require_once _DIR_.'/../templates/header.php';?>
        <div class='content'>
        <form class="contact_form" action="../engine/authorization_function.php" method="post" >
    <ul>
        <li>
             
        </li>
        <label >Login:</label>
            <input type="email" name="log" placeholder="Логин" required />
        
        </li>
        <li>
            <label >Password</label>
            <input type="password"  name='pas' placeholder="Пароль" required />
        </li>
        <li>
             <button class="submit" type="submit" >Отправить</button>
        </li>
        </ul>
    </form>
    </div>
    <?php require_once __DIR__.'/../templates/footer.php';?>
    </body>
</html>
