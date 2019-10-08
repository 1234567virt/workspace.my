<!DOCTYPE html>
<html lang="ru">
    <?php
$title="Вход";
$h1="Войти";
$year=date("Y");
?>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script>
           $(document).ready(function(){
            /*
               Проверка
            */
              $(".submit_call").click(function(){
                  login=$("input[name='log']").val();
                  passwd=$("input[name='pas']").val();
                  error=document.getElementById("errorPas");
                  $.ajax({
                      url:'/engine/authorization_function.php',
                      type:'POST',
                      dataType: "json",
                      data:{ login:login, password:passwd },
                       success:function(result)
                       {
                           if(result.data=="error"){
                           error.innerHTML='<b>Ошибка</b>';
                           }
                           else{
                            location.replace(result.data);
                           }
                           
                       }
                   });
              });
            ////////////////////////////////////
           })
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
        <link rel="stylesheet" href="./css/autorization.css">
        <link rel="stylesheet" href="./css/header.css">
    </head>

    <body id='templatemo_body'>
        <?php require_once('../templates/header.php'); //Подключения шапки сайта?>
        <center style="margin-top:15px;">
            <h1><?php echo $h1 ?></h1>
        </center>
        <span id="errorPas"></span><!-- js сюда кидает сообщения о ошибке -->
        <form class="contact_form"><!--  Форма авторизации-->
            <ul>
                <li>
                </li>
                <label>Login:</label>
                <input type="email" name="log" placeholder="Логин" required />
                </li>
                <li>
                    <label>Password</label>
                    <input type="password" name='pas' placeholder="Пароль" style='margin-top:15px' required />
                </li>
                <li>
                <input class="submit_call" style="margin-left:170px" type="button" value='Отправить'>

                </li>
            </ul>
        </form>
        <!-- конец формы авторизации-->
        </div>
        </div>
    </body>

</html>