<!DOCTYPE html>
<html lang="ru">
<?php
$title="Калькулятор";
$h1="Калькулятор";
$date=date("Y");
require_once('../engine/init.php');
$arg2=isset($_POST['numberTwo'])?  $_POST['numberTwo'] : '';
$arg1=isset($_POST['numberOne'])? $_POST['numberOne'] : ''; 
$result='';

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
         <link rel="stylesheet" href="./css/calc.css"> 
        <link rel="stylesheet" href="./css/header.css"> 
    </head>
    <body id='templatemo_body' >
    <?php require_once('../templates/header.php');?>
    <center style="margin-top:5px;"><h1>Калькулятор</h1></center>
   <div id="contact_form">
      
    <form method="post" id="formH" action="<?="calc.php";?>">
        <input type="number" placeholder="Значение 1" value="<?=$arg1;?>" name="numberTwo" required class="required input_field" />
            <select name="hero" id="select" >
                <option disabled></option>
                <option value="+">+</option>
                <option  value="-">-</option>
                <option  value="*">*</option>
                <option  value="/">/</option>
            </select>
       <input type="number" placeholder="Значение 2" value="<?=$arg1;?>" name="numberOne" required class="validate-email required input_field" />
<br>
       <input type="submit" class="submit_call" name="submit" value="Расчитать" />
<br>
<?php
require_once('../templates/calculator/calc_result.php');
    ?>
    </div>
    </div>
</body>
</html>

