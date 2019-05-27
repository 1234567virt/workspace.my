<!DOCTYPE html>
<html lang="ru">
<?php
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
    $('#info').load("comment.php"); 

    $("#send").click(function(){
     var dannie=$("form").serialize();
     $('#send').prop('disabled',true);
    $.ajax({
          url:'past_comment_catalog.php',
          type:'POST',
          data:dannie,
          success:function(data){
                 $('#info').load("comment.php");
                 document.forms[0].reset();
                 $('#send').prop('disabled',false);
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
                  <link rel="stylesheet" href="./css/header.css"> 
    </head>
    <body id='templatemo_body' >
    <?php require_once('../templates/header.php');?>
    <center><h1><?=$h2?></h1></center>
<?php
         require_once "../templates/catalog/catalog_basket.php";

       //  require_once "../templates/catalog/comment_catalog.php";
?>
         
                    <h2 style="margin:0 auto;"><?=$h2;?></h2>
                    <div id="info"></div>
            <?php 
            require_once "../templates/catalog/form_catalog.php";
            ?>
</div>
    </div>
  
</body>
</html>

