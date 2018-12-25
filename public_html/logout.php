<!DOCTYPE html>
<html lang="ru">
<?php
$title="Регистрация";
$h1="Зарегистрироваться";
$year=date("Y");

?>
    <head>
    <style>

#templatemo_body{
    background: url(img/templatemo_body.jpg) repeat;
}
#templatemo_body_wrapper {

    background: url(img/templatemo_body_top.jpg) repeat-x top
}
#templatemo_header {
    background: url(img/templatemo_header_bg.png) no-repeat bottom; 
}

#templatemo_menubar {

    background: url(img/templatemo_menubar.png) no-repeat;
}

#templatemo_main {
    background: url(img/templatemo_main_bg.png) repeat-y;
}
    </style>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="./css/menu.css">
        <link rel="stylesheet" href="./css/logout.css"> 
        <link rel="stylesheet" href="./css/header.css"> 
    </head>
    <body id='templatemo_body' >
    <?php require_once('../templates/header.php');?>
                                <center><h1><?=$h1?></h1></center>
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
                <button class="submit_call" type="submit" >Зарегестрироваться</button>
                        </li>
                 </ul>
        </form>
   </div>
    </div>
</body>
</html>

