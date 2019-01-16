<!DOCTYPE html>
<html lang="ru">
<?php
require_once '../engine/init.php';

$h1="Купить!!!!";
$year=date("Y");
$title="Распечатать";
    $sql1="select product.src as `src`,basket.* 
    ,product.price as `price`,product.text as `text`, `basket`.count * `product`.price as `result` from `basket` left join `product` on `basket`.id_product=`product`.id";
   // $sql1=";
    $result = mysqli_query($link, $sql1) or die("Ошибка " . mysqli_error($link)); 
  //  $headers='From:vitte@gmail.ru'."\r\n".
    'Replay-To:vitte@bk.com'."\r\n".
    'X-Mailer:PHP/'.phpversion();
  //  $message="Номер вашего заказа ";
   // mail($login,"Ваш заказ ",$message);
  ?>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="https://use.fontawesome.com/452826394c.js"></script>
        <title><?php echo $title ?></title>
        
        <style>
#templatemo_body{
    background: url(img/templatemo_body.jpg) repeat;
}

    </style>
   
        <link rel="stylesheet" href="./css/menu.css" media="screen">
        <link rel="stylesheet" href="./css/header.css" media="screen"> 
        <link rel="stylesheet" href="./css/basket.css" media="screen"> 
        <link rel="stylesheet" href="./css/print.css" media="print" > 
    </head>
    <body id='templatemo_body'>
  
                 <center>  <h1><?=$title?></h1></center>
             <h3 style='margin:30px'><?=$user['user_name']?> </span> <?=$h1?></h3>
               <table width="680px" style="margin:auto;color:white" cellspacing="0" cellpadding="5">
                       	  <tr bgcolor="#ddd">
                        	<th width="220" align="left">Изображение</th> 
                        	<th width="180" align="left">Название </th> 
                       	  	<th width="100" align="center">Количество </th> 
                        	 
                        	<th width="60" align="right">Всего </th> 
                        	<th width="90"> </th>
                        </tr>
               <?php
    while ($row = mysqli_fetch_array($result))
    {
    require_once('../templates/basket/basket_print.php');
  ?>

<?php } ?>

</table>		
                    	
         </div>
         <a href="#"  onclick="window.print()"><i style="display:block;margin-left:50%;margin-top:1%" class="fa fa-3x fa-shopping-basket"></i></a>
    </div>
    <br>
    <center><?=$year?> г.</center>
  </div>
</body>
</html>

