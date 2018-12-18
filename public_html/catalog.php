<!DOCTYPE html>
<html lang="ru">
<?php
$title="Каталог";
$h1="Каталог";
$year=date("Y");
$h2="Написать отзыв";
?>
    <head>
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
    <div id="templatemo_body_wrapper">
        <div id="templatemo_wrapper">
     
             <div id="templatemo_header">
                    <div id="site_title"><h1><a href="#"><?=$h1?></a></h1></div>
                        <div class="cleaner"></div>
                 </div> 
                             <div id="templatemo_menubar">

                                         <div id="top_nav" class="ddsmoothmenu">
                                            <ul>
                                            <?php require_once('../templates/menu.php');?>
                                                </ul>
                                            <br style="clear: left" />
                                         </div>

                             </div>

    </div>
    <center><h1><?=$h2?></h1></center>
<?php
         require_once "../templates/gallery(unit5).php";
         require_once "../templates/comment_catalog.php";
?>
          <hr>
                    <h2 style="margin:0 auto;"><?=$h2;?></h2>
            <?php 
            require_once "../templates/form_catalog.php";
            ?>
</div>
    </div>
</body>
</html>

