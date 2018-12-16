<!DOCTYPE html>
<html lang="ru">
<?php
$title="Главная";
$h1="Санрайс";
$year=date("Y");

?>
    <head>
    <style>
 #formH{
    width: 700px;
    height: 70px;
    border:0px;
    margin: 100px auto;
}
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

.contact_form input[type="password"] {
    margin-top:10px;
    margin-left:20px;
    width: 300px;
    height: 40px;
    background: #f8f8f8;
    border-radius: 10px;
    box-shadow: 1px 1px 2px black, 0 0 1em red;
    text-align: center;
    
}
.contact_form{
    margin:50px auto;
    width: 500px;
    height: 600px;
}
ul{
    list-style-type:none;
}
.contact_form label {
    font-size:15px;
    color:white;
    font-family:Arial;
}
.contact_form input[type="email"] {
    margin-top:10px;
    margin-left:45px;
    width: 300px;
    height: 40px;
    background: #f8f8f8;
    border-radius: 10px;
    box-shadow: 1px 1px 2px black, 0 0 1em red;
    text-align: center;
}
.contact_form input[type="number"] {
    margin-top:10px;
    margin-left:22px;
    width: 300px;
    height: 40px;
    background: #f8f8f8;
    border-radius: 10px;
    box-shadow: 1px 1px 2px black, 0 0 1em red;
    text-align: center;
}
.contact_form input[type="text"] {
    margin-top:10px;
    margin-left:55px;
    width: 300px;
    height: 40px;
    background: #f8f8f8;
    border-radius: 10px;
    box-shadow: 1px 1px 2px black, 0 0 1em red;
    text-align: center;
}
.submit_call{
    margin-left:80px;
   margin:0 auto;
    width: 150px;
    height: 50px;
    border-radius: 10px;
    border: 0px solid transparent;
    margin-top: 10px;
    margin-left: 40px;
    border-color: aqua;
    background: burlywood;

}

.submit_call:hover{
   
   width: 150px;
   height: 50px;
   border-radius: 10px;
   border: 0px solid transparent;
   margin-top: 10px;
   margin-left: 40px;
   border-color: black;
   background:grey;

}
    </style>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="./css/menu.css">
         <!-- <link rel="stylesheet" href="./css/style.css">  -->
                  <link rel="stylesheet" href="./css/header.css"> 
    </head>
    <body id='templatemo_body' >
    <div id="templatemo_body_wrapper">
        <div id="templatemo_wrapper">
     
             <div id="templatemo_header">
                    <div id="site_title"><h1><a href="#">Санрайс</a></h1></div>
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
    </form>v>
   
</div>
    </div>
</body>
</html>

