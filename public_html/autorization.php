<!DOCTYPE html>
<html lang="ru">
<?php
$title="Вход";
$h1="Войти";
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
        <link rel="stylesheet" href="./css/autorization.css"> 
                  <link rel="stylesheet" href="./css/header.css"> 
    </head>
    <body id='templatemo_body' >
    <div id="templatemo_body_wrapper">
        <div id="templatemo_wrapper">
                <div id="templatemo_header">
                    <div id="site_title"><h1><a href="#"><?php echo $h1; ?></a></h1></div>
                        <div class="cleaner"></div>
                 </div> <!-- END of templatemo_header -->

                             <div id="templatemo_menubar">

                                         <div id="top_nav" class="ddsmoothmenu">
                                            <ul>
                                            <?php require_once('../templates/menu.php');?>
                                                </ul>
                                            <br style="clear: left" />
                                         </div>
                              </div>
        </div>
    <center style="margin-top:15px;"><h1><?php echo $h1 ?></h1></center>
    <form class="contact_form" action="../engine/authorization_function.php" method="post" >
    <ul>
        <li>
             
        </li>
        <label >Login:</label>
            <input type="email" name="log" placeholder="Логин" required />
        
        </li>
        <li>
            <label >Password</label>
            <input type="password"  name='pas' placeholder="Пароль" style='margin-top:15px' required />
        </li>
        <li>
             <button class="submit_call"  style="margin-left:170px" type="submit" >Отправить</button>
        </li>
        </ul>
    </form>
</div>
    </div>
</body>
</html>


