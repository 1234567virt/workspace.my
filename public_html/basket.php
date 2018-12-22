<!DOCTYPE html>
<html lang="ru">
<?php
 require_once('/opt/lampp/htdocs/workspace.my/engine/db_connect.php');
    //$title="Личный кабинет";
$h1="Купите у нас хоть что-нибудь!!!!";
$year=date("Y");
$title="Корзина";

$arg1=isset($_GET['id'])? $_GET['id'] : '';
$arg2=isset($_GET['count'])? $_GET['count'] : '';
$error='';

$arg2=0;
//if(isset($_GET['count']) && isset($_GET['id'])){
  
        $sql="SELECT * FROM `product`";
        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
   //  $num_rows = mysqli_num_rows( $result);
//}
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
                 <center>  <h1>Корзина</h1></center>
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
  ?>
  <form action ='./shoppingcart.php'>
  <tr>
        <td><img src='<?=$row['src']?>' width="40%"/></td> 
        <td><?=$row['name']?></td> 
        <td align="center"><input type="number" name="count"  placeholder='0' id='select'  /> </td>
        <td align="right"><?=$row['price']?> $</td> 
        <input type="hidden" name="id" value="<?=$row['id']?>" id='select'  />
        <td align="right"><?=$row['price']?>$ </td>
       <td align="center">
        <button type="submit"  name='save' value='save'> <img src='img/basket.png'></button>
<button type="submit" name='delete' value='delete'><img src='img/rm.png'  style='width:17px;height:17px'></button>
    </td>
        </tr>
   </form>
<?php } ?>
</table>		
                    	
         </div>
    </div>
    </div>
</body>
</html>

