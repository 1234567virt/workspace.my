<!DOCTYPE html>
<html lang="ru">
<?php
require_once '../engine/init.php';
 if(isset($_SESSION['user_id'])){
$h1="Купите у нас хоть что-нибудь!!!!";
$year=date("Y");
$title="Корзина";

$arg2=0;

    $sql1="SELECT * FROM `basket`";
    $result = mysqli_query($link, $sql1) or die("Ошибка " . mysqli_error($link)); 
    ?>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="https://use.fontawesome.com/452826394c.js"></script>
        <title><?php echo $title ?></title>
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
   
        <link rel="stylesheet" href="./css/menu.css">
        <link rel="stylesheet" href="./css/header.css"> 
        <link rel="stylesheet" href="./css/basket.css"> 
    </head>
    <body id='templatemo_body' >
    <?php require_once('../templates/header.php');?>
                 <center>  <h1><?=$title?></h1></center>
             <h3 style='margin:30px'><?=$user['user_name']?> </span> <?=$h1?></h3>
               <table width="680px" cellspacing="0" cellpadding="5">
                       	  <tr bgcolor="#ddd">
                        	<th width="220" align="left">Изображение</th> 
                        	<th width="180" align="left">Название </th> 
                       	  	<th width="100" align="center">Количество </th> 
                        	<th width="60" align="right">Цена </th> 
                        	<th width="60" align="right">Всего </th> 
                        	<th width="90"> </th>
                        </tr>
               <?php
    while ($row = mysqli_fetch_array($result))
    {
    require_once('../templates/basket/basket_form.php');
  ?>

 
<?php } 
 }
 else {
    header('Location:../public_html/autorization.php');
  }
?>
</table>		
                    	
         </div>
    </div>
    </div>
</body>
</html>

