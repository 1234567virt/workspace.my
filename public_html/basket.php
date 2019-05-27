<!DOCTYPE html>
<html lang="ru">
<?php
require_once '../engine/init.php';
 if(isset($_SESSION['user_id'])){
$h1="Купите у нас хоть что-нибудь!!!!";
$year=date("Y");
$title="Корзина";

$arg2=0;

$sql1="select product.src as `src`,basket.* 
,product.price as `price`,product.text as `text`,
`product`.name, `basket`.count * `product`.price as `result`
 from `basket` left join
 `product` on `product`.id=`basket`.id_product where `basket`.id_user=".$_SESSION['user_id']."";

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
   
        <link rel="stylesheet" href="./css/menu.css" media="screen">
        <link rel="stylesheet" href="./css/header.css" media="screen"> 
        <link rel="stylesheet" href="./css/basket.css" media="screen"> 
        <link rel="stylesheet" href="./css/print.css" media="print" > 
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
        //require_once('../templates/basket/basket_form.php');
        ?>
   
   <form action ='./basket_cantroler.php'>
  <tr>
        <td><img src='<?=$row['src']?>' width="40%"/></td> 
        <td><?=$row['name']?></td> 
        <td align="center"><input type="number" name="count" value='<?=$row['count']?>'  min='0' max='15'
placeholder='0' id='select'  /> </td>
        <input type="hidden" name="id" value='<?=$row['id_product']?>'  placeholder='0' id='select'  />
        <input type="hidden" name="name" value='<?=$row['name']?>'  placeholder='0' id='select'  />
        <td align="right"><?=$row['price']?> $</td> 
        
     
        <td align="right"><?=$row['result']?>$ </td>
       <td align="center">
        <button type="submit"  name='save' value='save'> <img src='img/basket.png'></button>
<button type="submit" name='delete' value='delete'><img src='img/rm.png'  style='width:17px;height:17px'></button>
    </td>
        </tr>
   </form>
  <?php
  

 } 

 }
 
 else {
    header('Location:../public_html/autorization.php');
  }
?>
</table>		
                    	
         </div>
         <a href="print.php" style=" margin-top:15px; display:inline-block; margin-left:150px;width:250px;height:30px;font-weight:bold;color:white;background:red;border-radius:7px;border:0px solid transparent;padding-top:10px; text-align:center">Нажми меня,я хочу тебя</a>
    </div>

  </div>
</body>
</html>

