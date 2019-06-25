<!DOCTYPE html>
<html lang="ru">
<?php
require_once '../engine/init.php';
 if(isset($_SESSION['user_id'])){
$h1="Купите у нас хоть что-нибудь!!!!";
$year=date("Y");
$title="Корзина";
$arg2=0;
$id=$_GET['id'];
?>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://use.fontawesome.com/452826394c.js"></script>
        <script type="text/javascript">

        function shows(){
            $('#loader-identity').fadeIn();
          $("h3").load('basket_body.php');
        }
       function savebasket(id,count){
           $.get('basket_cantroler.php',{count:count,id:id},function(){$('#loader-identity').fadeOut(150);});
           shows();
       }
       function del(id){
             $.get('basket_cantroler.php',{delete:'delete',id:id},function(){ $('#loader-identity').fadeOut(150);});
            shows();
       }
        $("document").ready(function(){
            shows();
            $('#loader-identity').fadeOut(150);
            $("input[type=number]").bind('keyup input', function(){
                savebasket(id,$("input[type=number]").val());
               
               $("#filter").click(function(){

               })
});
        });
    </script>
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
        <link rel="stylesheet" href="./css/loader.css">
        <link rel="stylesheet" href="./css/print.css" media="print" > 
    </head>
    <body id='templatemo_body' >
    <?php require_once('../templates/header.php');?>
                 <center>  <h1><?=$title?></h1></center>
                 <div id="loader-identity"></div>
             <h3 style='margin:30px'> </span> <?=$h1?></h3>
        <?php
}
 else {
    header('Location:../public_html/autorization.php');
  }
?>
    </div>
         <a href="print.php" style=" margin-top:15px; display:inline-block; margin-left:150px;width:250px;height:30px;font-weight:bold;color:white;background:red;border-radius:7px;border:0px solid transparent;padding-top:10px; text-align:center">Нажми меня,я хочу тебя</a>
    </div>

  </div>
</body>
</html>

