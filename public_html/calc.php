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
   
</head>
<body>
       
 
  <form action="<?="calc.php";?>" method="post">
        <input type="number" placeholder="Значение 1" value="<?=$arg1;?>" name="numberOne" required>
        <input type="text" placeholder="Значение 2" value="<?=$arg2;?>" name="numberTwo" required>
    <p><select name="hero" required>
     <option disabled></option>
     <option value="+">+</option>
     <option  value="-">-</option>
     <option  value="*">*</option>
     <option  value="/">/</option>
    </select></p>
    <p><input type="submit" value="Отправить"></p>
   </form>
<?php 

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