<!DOCTYPE html>
<?php require_once('../engine/init.php');
$arg2=isset($_POST['numberTwo'])?  $_POST['numberTwo'] : '';
$arg1=isset($_POST['numberOne'])? $_POST['numberOne'] : ''; 
$result='';

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="header">
            <img src='./img/logo.jpeg' alt='SonyValio' class='logo'>
            <ul>
                  <?php
                  require_once('../templates/menu.php');
               
                  ?>

            </ul>
            
        
        </div>
 
  
<?php 
require_once('../templates/calc_form.php');
if(isset($_POST['hero']) && isset($_POST['numberOne']) && isset($_POST['numberTwo'])){
    $arg1=(int)$_POST['numberOne'];
    $arg2=(int)$_POST['numberTwo'];
    $hero=$_POST['hero'];
        $result=mathOperation(clear($link,$arg1),clear($link,$arg2),clear($link,$hero));
        echo "<span style='color:green;font-size:15px'>Ответ:".$result."<span>";
    }

?>
</body>
</html>