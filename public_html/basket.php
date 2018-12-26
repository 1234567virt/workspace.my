<!DOCTYPE html>
<html lang="ru">
<?php
require_once '../engine/init.php';
 if(isset($_SESSION['user_id'])){
$h1="Купите у нас хоть что-нибудь!!!!";
$year=date("Y");
$title="Корзина";
require_once "../templates/dataNull.php"; 
$error='';
$arg2=0;

/////////////////////
if(isset($_GET['count']) && isset($_GET['id'])){
    require_once("../templates/dataClear.php"); 
  
        $massiv=mysqli_query($link,"select * from `product` where `number`>='$arg2' and `id`='$arg1'");
     
        $count_save=mysqli_num_rows($massiv);
        if($count_save===0){
           echo 'Нехватает продукции';
       
         }
         else{
                  while ($one= mysqli_fetch_array($massiv)){
 
                    insert_basket($link,$_SESSION['user_id'],$one['src'],$one['name'],$one['price'],$arg2);
                 
                     
                      }
                      header('Location:../public_html/catalog.php?id=3');
                    
                    }       
     }
   
             
    

//////////////////
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
  ?>
  <form action =''>
  <tr>
        <td><img src='<?=$row['src']?>' width="40%"/></td> 
        <td><?=$row['name']?></td> 
        <td align="center"><input type="number" name="count" value='<?=$row['count']?>'  placeholder='0' id='select'  /> </td>
        <td align="right"><?=$row['price']?> $</td> 
        
     
        <td align="right"><?=$row['price']?>$ </td>
       <td align="center">
        <button type="submit"  name='save' value='save'> <img src='img/basket.png'></button>
<button type="submit" name='delete' value='delete'><img src='img/rm.png'  style='width:17px;height:17px'></button>
    </td>
        </tr>
   </form>
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

