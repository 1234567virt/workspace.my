<!DOCTYPE html>
<html lang="ru">
<?php
$title="Контакты";
$h1="Напишите нам";
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
    width: 800px;
    height: 800px;
}
ul{
    list-style-type:none;
}
.contact_form label {
    margin-left:-95px;
    margin-top:50px;
    font-size:15px;
    color:white;
    font-family:Arial;
}
.contact_form input[type="email"] {
    margin-top:10px;
    margin-left:50px;
    width: 300px;
    height: 40px;
    background: #f8f8f8;
    border-radius: 10px;
    box-shadow: 1px 1px 2px black, 0 0 1em red;
    text-align: center;
}
.contact_form input[type="number"] {
    margin-top:10px;
    margin-left:30px;
    width: 300px;
    height: 40px;
    background: #f8f8f8;
    border-radius: 10px;
    box-shadow: 1px 1px 2px black, 0 0 1em red;
    text-align: center;
}
.contact_form input[type="text"] {
    margin-top:10px;
    margin-left:60px;
    width: 500px;
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
input[type="email"]:focus {
    color: green;
    
}

 textarea{
   
    margin-top:15px;
    border:1px solid green;
     border-radius:10px;
    width: 800px;
    height: 180px;
    }

textarea:focus{
    text-transform: capitalize;
}

iframe{
    width: 100%;
    height: 374px;
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
   
    <center><h1><?php echo $h1; ?></h1></center>
        <form action="" method="POST" class="contact_form" name='form'>
             <label>Тема:</label><input type="text" ><br>
             <label>Имя:</label><input type="text" ><br>
             <label>Телефон:</label><input type="number" ><br>
             <label>E-mail:</label><input type="email"><br>
             <textarea rows="10" cols="50" placeholder='Напишите нам'></textarea>
                     
            <input type='submit' class='submit_call'>
            <input type='reset' value='Сбросить текст' class='submit_call'>
        </form>
         <h3>
            Адрес
         </h3>
    
    <p>
       
        <b>Контактный номер телефона интернет-магазина-</b>01;<br>
        <b>Адрес-</b>Кремль;<br>
        <b>E-mail-</b>mail@mail.ru;<br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.554539976067!2d37.53667275097145!3d55.74886849966814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54bdd017303b9%3A0xd1f63f945a2450c2!2z0JzQvtGB0LrQstCwINCh0LjRgtC4!5e0!3m2!1sru!2sru!4v1540320878071" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </p>

    </div>

                             </div>

    </div>
    
    </div>
</body>
</html>

