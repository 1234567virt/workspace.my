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
       <style>
       #limcoment{
           border:0px;
       }
          #limcoment:hover{
              border:0px;
          }
       </style>
        <script type="text/javascript">
        /////////////////////////////////////

        $("document").ready(function() {
            var lim = 0;
            $('#info').load("/templates/comment.php", {
                limit: lim
            });//Загрузка комментов привязан к id info 
            $('#limcoment').click(function() {
                lim = lim + 5;
                $('#info').load("/templates/comment.php", {
                    limit: lim
                });//Загрузка коментов по 5 при щелчке
            })
            $("#send").click(function() {
                var dannie = $("form").serialize();
                $('#send').prop('disabled', true);
                $.ajax({
                    url: '/controller/past_comment_catalog.php',
                    type: 'POST',
                    data: dannie,
                    beforeSend: function() {
                        $("#loader-identity").fadeIn(400);
                    },
                    timeout: (900),
                    success: function(data) {
                        $('#info').load("/templates/comment.php", {
                            limit: lim
                        });

                    },
                    complete: function() {
                        document.forms[0].reset();
                        $('#send').prop('disabled', false);
                        $("#loader-identity").fadeOut(500);
                    }
                });
            });
        });//объект ajax делает кучу ерунды лучше поговорим при встречи о нем
        </script>
        <style>
        #templatemo_body {
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

    <body id='templatemo_body'>
        <?php require_once('../templates/header.php');?>
        <center>
            <h1><?=$h1?></h1>
        </center>
        <?php
         require_once "../templates/catalog/catalog_basket.php";//Подключения файла вывода  товаров
?>
        <div id="loader-identity"></div><!-- блок который отвечает за красоту которая двигаеться -->
        <h2 style="margin:5% 35% 1% 40%"><?=$h2;?></h2>
        <div id="info" style='margin-left:15%; width:70%'></div><!-- комменты -->
        <img src='img/arrow-right.png' id='limcoment' style='margin-left:75px;width:45px;height:45px;'>
        <?php 
             require_once "../templates/catalog/form_catalog.php";//Подключения файла формы коментариев
             ?>
        </div>
        </div>
    </body>

</html>