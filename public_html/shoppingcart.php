<!DOCTYPE html>
<html lang="ru">
<?php
$title="Личный кабинет";
$h1=" В вашей корзине !!!!";
require_once('../engine/init.php');
$arg1=isset($_GET['id'])? $_GET['id'] : '';
$arg2=isset($_GET['count'])? $_GET['count'] : '';
$error='';
if(isset($_GET['count']) && isset($_GET['id'])){
   $arg1=clear($link,$_GET['id']);
   $arg2=clear($link,$_GET['count']);
   if (isset($_GET["save"])) {
      $massiv=mysqli_query($link,"select * from `product` where `number`>='$arg2' and `id`='$arg1'");
      $count_save=mysqli_num_rows($massiv);
         if($count_save===0){
            echo 'Нехватает продукции';
          // die;
          }
          else{
              
                while ($one= mysqli_fetch_array($massiv)){
                     insert_basket($link,$_SESSION['user_id'],$one['name'],$arg2);
                     }
            }
    }
      elseif (isset($_GET["delete"])) {
         delete_basket($link,$_GET['id']);
      }
            // else{
               $result=getSelectProduct($link,$arg1);
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

img{
   border-radius:9px;
   box-shadow: 1px 1px 2px black, 0 0 1em red;
}

.text{
   font-size:16px;
   font-family:Verdana;
}
table td{
   border-bottom:1px solid red;
   padding-top:10px;
}

h1{
   margin:10px auto;
}
a{
  text-decoration:none;
}
.submit_call{
    margin-left:50px;
   margin:0 auto;
    width: 150px;
    height: 50px;
    border-radius: 10px;
    border: 0px solid transparent;
    margin-top: 10px;
    margin-left: 40px;
    border-color: aqua;
    background: burlywood;

}

.submit_call:hover{
   
   width: 150px;
   height: 50px;
   border-radius: 10px;
   border: 0px solid transparent;
   margin-top: 10px;
   margin-left: 40px;
   border-color: black;
   background:grey;

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
              <?php require_once('../templates/basket_cart.php');?>
            </table>

            <span>Ваш логин:<?=$user['user_login']?></span>
            <?php require_once "../templates/basket_form.php"; ?>
   </div>
        </div>
    </div>
    </div>
    </body>
</html>
