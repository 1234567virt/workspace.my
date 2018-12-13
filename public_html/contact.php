<!DOCTYPE html>
<html lang="ru">
<head>
<?php
  $title="Контакт";
$h1="Санрайс";
$year=date("Y");

  ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title><?php echo $title ?></title>
</head>
<body>
 
        <div class='container'>
    <div class="header">
        <img src='./img/logo.jpeg' alt='SonyValio' class='logo'>
        <nav>
        <ul>
    

     <?php  require_once ('../templates/menu.php');?>     
         </ul>
         </nav>
         <hr>
    </div>
    
    <div class='content'>
      
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="contact.php">Контакты</a></li>
        </ul>
        <h1>
        Напишите нам
        </h1>
        <form action="" method="POST"  id="contact" name='form'>
             <label>Тема:<input type="text" aling='left'></label><br>
             <label>Имя:<input type="text" aling='left'></label><br>
             <label>Телефон:<input type="text" aling='left'></label><br>
             <label>E-mail:<input type="email"></label>
             <textarea rows="10" cols="50" placeholder='Напишите нам'></textarea>
                        <br/>
            <input type='submit'>
            <input type='reset' value='Сбросить текст'>
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
    <div class='footer'> 
            <hr>
        <strong>
            Все права защищены<sup>&copy;</sup> <?php echo $year?>
        </strong>
    </div>   
    </div>
</body>
</html>