<!DOCTYPE html>
<html lang="ru">
<?php
$title="Личный кабинет";
$h1=" В вашей корзине !!!!";
$year=date("Y");
require_once('../templates/basket_obr.php');
require_once('../engine/init.php');
$arg1=isset($_GET['id'])? $_GET['id'] : '';
$arg2=isset($_GET['count'])? $_GET['count'] : '';
$error='';
if(isset($_GET['count']) && isset($_GET['id'])){
   $arg1=clear($link,$_GET['count']);
   $arg2=clear($link,$_GET['id']);

   if (isset($_GET["save"])) {
      insert_basket($link,$user_id,$product_name,$_GET['count']);

       }
        elseif (isset($_GET["delete"])) {
         delete_basket($link,$_GET['id']);
       }
      // else{
           $sql="SELECT * FROM `product` where `id`='$arg2'";
            $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
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
              <?php while ($row = mysqli_fetch_array($result)){?>
                  <tr>
                           <td><img src='<?=$row['src']?>' width="40%"/></td> 
                           <td><?=$row['name']?></td> 
                           <td align="center"><input type="number" value="<?=$arg1?>" id='select'  /> </td>
                           <td align="right"><?=$row['price']?> $</td> 
                           <td align="right"><?=$row['price']?>$ </td>
                           <td align="center"> <a href="#"><i class="fa fa-lg fa-shopping-basket"></i>
                           <img src='img/rm.png' style='width:17px;height:17px'> </td>
                  </tr>
<?php } ?>
            </table>

            <span>Ваш логин:<?=$user['user_login']?></span>
        <form style ="margin-top:25px;" action="../templates/basket_obr.php" method="post">
            <label>Продукт: <select name="product" style="width:125px;height:40px"></label>
            <option></option>
            <?php foreach($product as $key=>$val){
            echo "<option>".$val['name']."</option>";   
            }
         ?>
            <label>Количество:<input type="number" placeholder="Количество" id="select" style="margin-left:200px;width:85px" name="count" required></label>
            </select>
            <input type="submit" class='submit_call' value="Зарезирвировать"></p>
         </form> 
   </div>
        </div>
    </div>
    </div>
    </body>
</html>
