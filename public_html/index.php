<!DOCTYPE html>
<html lang="ru">
<?php
require_once ('../engine/init.php');
$title="Главная";
$h1="Санрайс";
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
    </style>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link href="./css/templatemo_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="./css/nivo-slider.css" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/ddsmoothmenu.js">
        </script>
        <link rel="stylesheet" href="./css/menu.css">
         <!-- <link rel="stylesheet" href="./css/style.css">  -->
        <link rel="stylesheet" href="./css/header.css"> 
    </head>
    <body id='templatemo_body' >
    <?php require_once('../templates/header.php');?>
                             <div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="img/nout2.jpg" alt="" title="" />
                    <a href="#"><img src="img/nout1.jpg" alt="" /></a>
                    <img src="img/nout3.jpg" alt="" />
                    <img src="img/nout4.jpg" alt="" title="#htmlcaption" />
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                </div>
            </div>
            <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
    </div>
    </div>
</body>
</html>
