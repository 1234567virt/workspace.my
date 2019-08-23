<!DOCTYPE html>
<html lang="ru">
    <?php
$title="Калькулятор";
$h1="Калькулятор";
$date=date("Y");
require_once('../engine/init.php');
$arg2=isset($_POST['numberTwo'])?  $_POST['numberTwo'] : '';
$arg1=isset($_POST['numberOne'])? $_POST['numberOne'] : ''; 
$result='';
?>

    <head>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript">
        $("document").ready(function() {
            $("#send").click(function() {
                var dannie = $("form").serialize();

                $.ajax({
                    url: 'result.php',
                    type: 'POST',
                    data: dannie,
                    success: function(data) {
                        var res = document.getElementById('res');
                        res.innerHTML = data;
                    }
                });
            });
        });
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
        <link rel="stylesheet" href="./css/calc.css">
        <link rel="stylesheet" href="./css/header.css">
    </head>

    <body id='templatemo_body'>
        <?php require_once('../templates/header.php');?>
        <center style="margin-top:5px;">
            <h1>Калькулятор</h1>
        </center>
        <?php require_once('../templates/calculator/calc_form.php');
   ?>
        <div id='res'></div>
        <?php
require_once('./result.php');
    ?>
        </div>
        </div>
    </body>

</html>