<!DOCTYPE html>
<html lang="ru">
<?php
$title="Личный кабинет";
$h1=" В вашей корзине !!!!";
require_once('../engine/init.php');
require_once("../templates/dataNull.php"); 
$error='';
if(isset($_GET['count']) && isset($_GET['id'])){
   require_once("../templates/dataClear.php"); 
   if (isset($_GET["save"])) {
      $massiv=mysqli_query($link,"select * from `product` where `number`>='$arg2' and `id`='$arg1'");
      $count_save=mysqli_num_rows($massiv);
         if($count_save===0){
            echo 'Нехватает продукции';
        
          }
          else{
              
                while ($one= mysqli_fetch_array($massiv)){
                     insert_basket($link,$_SESSION['user_id'],$one['name'],$arg2);
                     echo $arg1;
                   
                     }
            }
    }
      elseif (isset($_GET["delete"])) {
         delete_basket($link,$_GET['id']);
      }
            // else{
               $result=getSelectProducts($link,$arg1);
      //   }
       
 //  }
}
?>
    <head>
    <script type="text/javascript" src="https://use.fontawesome.com/452826394c.js"></script>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="./css/menu.css">
        <link rel="stylesheet" href="./css/header.css"> 
        <link rel="stylesheet" href="./css/basket.css"> 
        <link rel="stylesheet" href="./css/shoppingcart.css"> 
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
    </head>
    <body id='templatemo_body'>
         <?php require_once('../templates/header.php');?>
         <h1 style='margin-top:30px'><?=$user['user_name']?> </span> <?=$h1?></h1>
           <table width="680px" cellspacing="0" cellpadding="5">
                     <tr bgcolor="#ddd">
                           <th width="220" align="left">Изображение</th> 
                           <th width="180" align="left">Название </th> 
                            <th width="100" align="center">Количество </th> 
                           <th width="60" align="right">Цена </th> 
                           <th width="60" align="right">Всего </th> 
                           <th width="90"> </th>
                     </tr>
              <?php require_once('../templates/basket/basket_cart.php');?>
            </table>

            <span>Ваш логин:<?=$user['user_login']?></span>
            <?php require_once("../templates/basket/basket_form.php"); ?>
   </div>
        </div>
    </div>
    </div>
    </body>
</html>
