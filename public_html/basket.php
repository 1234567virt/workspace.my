<!DOCTYPE html>
<html lang="ru">
<?php
 
    require_once('/opt/lampp/htdocs/workspace.my/engine/db_connect.php');
    //$title="Личный кабинет";
$h1="Купите у нас хоть что-нибудь!!!!";
$year=date("Y");
$title="Корзина";
$arg1=isset($_POST['count'])?  $_POST['count'] : '';
$arg2=isset($_POST['product'])? $_POST['product']: ''; 
$error='';
if(isset($_POST['count']) && isset($_POST['id'])){
}
     
        $sql="SELECT * FROM `product`";
     $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
     $num_rows = mysqli_num_rows( $result);
    ?>
    <head>
  

 
        <meta charset="UTF-8">
       
<script type="text/javascript" src="https://use.fontawesome.com/452826394c.js"></script>
        <title><?php echo $title ?></title>
   
        <style>

  #select{
    width: 35px;
    height: 35px;
    background: #f8f8f8;
    border-radius: 10px;
    box-shadow: 1px 1px 2px black, 0 0 1em red;
    text-align: center;
}

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
    </style>
   
        <link rel="stylesheet" href="./css/menu.css">
       <link rel="stylesheet" href="./css/header.css"> 
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
  <tr>
        <td><img src='<?=$row['src']?>' width="40%"/></td> 
        <td><?=$row['name']?></td> 
        <td align="center"><input type="number" value="1" id='select'  /> </td>
        <td align="right"><?=$row['price']?> $</td> 
        <td align="right"><?=$row['price']?>$ </td>
        <td align="center"> <a href="#"><i class="fa fa-lg fa-shopping-basket"></i></a><a href="#" > <img src='img/rm.png' style='width:17px;height:17px'></a> </td>
		</tr>
<?php } ?>
</table>		
                    	
         </div>
    </div>
    </div>
</body>
</html>

