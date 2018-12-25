<!DOCTYPE html>
<html lang="ru">
<?php
$title="Контакты";
$h1="Напишите нам";
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
         <link rel="stylesheet" href="./css/contact.css"> 
                  <link rel="stylesheet" href="./css/header.css"> 
    </head>
    <body id='templatemo_body' >
    <?php require_once('../templates/header.php');?>
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

