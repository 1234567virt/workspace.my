<!DOCTYPE html>
<html lang="ru">
<?php
$title="Каталог";
$h1="Каталог";
$year=date("Y");

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

img:hover {
    border:2px solid transparent;
    border-color:red;
}

 img.catalog{
     /*width: 20%;*/
     border:1px solid green;
     border-radius:12px;
 
 }


h4{
    margin-left:17px;
    width:30%;
    text-align:center;
    }
.gal{
    margin-top:30px;
    margin-left:20px;
    display:inline-block;  
    width:30%;
}
    </style>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="./css/menu.css">
         <!-- <link rel="stylesheet" href="./css/style.css">  -->
                  <link rel="stylesheet" href="./css/header.css"> 
    </head>
    <body id='templatemo_body' >
    <div id="templatemo_body_wrapper">
        <div id="templatemo_wrapper">
     
             <div id="templatemo_header">
                    <div id="site_title"><h1><a href="#"><?=$h1?></a></h1></div>
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

    </div>
    <center style="margin-top:15px;"><h1><?=$h1?></h1></center>
<?php
         require_once "../templates/gallery(unit5).php";
         require_once "../templates/comment_catalog.php";
?>
</div>
    </div>
</body>
</html>

