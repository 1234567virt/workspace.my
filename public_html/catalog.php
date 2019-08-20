<!DOCTYPE html>
<html lang="ru">
<?php
require_once('../engine/init.php');
$title="Каталог";
$h1="Каталог";
$h2="Написать отзыв";
?>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript">
/////////////////////////////////////

$("document").ready(function(){
    var lim=0;
    $('#info').load("comment.php",{limit:lim}); 
$('#limcoment').click(function(){
    lim=lim+5;
    $('#info').load("comment.php",{limit:lim});  
})
    $("#send").click(function(){
     var dannie=$("form").serialize();
     $('#send').prop('disabled',true);
    $.ajax({
          url:'past_comment_catalog.php',
          type:'POST',
          data:dannie,
          beforeSend:function(){
            $("#loader-identity").fadeIn(400);  
          },
         timeout:(900),
          success:function(data){
                 $('#info').load("comment.php",{limit:lim});
               
        },
        complete:function(){
            document.forms[0].reset();
                 $('#send').prop('disabled',false);
                 $("#loader-identity").fadeOut(500);
        }
    });
});
});
</script>
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
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="./css/menu.css">
        <link rel="stylesheet" href="./css/catalog.css">
        <link rel="stylesheet" href="./css/loader.css">
                  <link rel="stylesheet" href="./css/header.css"> 
    </head>
    <body id='templatemo_body' >
    <?php require_once('../templates/header.php');?>
    <center><h1><?=$h2?></h1></center>
<?php
         require_once "../templates/catalog/catalog_basket.php";
?>
          <div id="loader-identity"></div>
                    <h2 style="margin:0 auto;"><?=$h2;?></h2>
                    <div id="info"></div>
            <img src='img/update.png' id='limcoment' style='width:18px;height:18px;' >
 <?php 
             require_once "../templates/catalog/form_catalog.php";
             ?>
</div>
    </div>
  
</body>
</html>

