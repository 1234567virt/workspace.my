<!DOCTYPE html>
<html lang="ru">
    <?php
 require_once '../engine/init.php';
if($user['role']=='admin'){
 $h1="Купите у нас хоть что-нибудь!!!!";
$title="Корзина";
require_once "../templates/dataNull.php"; 
$error='';
?>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <meta charset="UTF-8">
        <style>
        #insert {
            width: 400px;
            height: 400px;
            border: 1px solid black;
            padding-left: 15px;

        }

        ul {
            list-style-type: none;
        }
        </style>
        <script type="text/javascript" src="https://use.fontawesome.com/452826394c.js"></script>        
        <script type="text/javascript">
        /*
 Функция для открытия блока создания нового товара       
         */

        function blockinsert(insert, insertbutton) {

            document.forms[1].reset();
            var blockinsert = document.getElementById(insert);
            var insertbutons = document.getElementById(insertbutton);
            blockinsert.style.display = 'none';
            insertbutons.value = 'Вставить';
        }

/*
Изменения названия кнопки сверху 
*/

        function insert() {
            var insert = document.getElementById('insertbutton');
            var form = document.getElementById('insert');
            var forminsert = document.getElementById('insertform');
            if (form.style.display == 'block') {
                form.style.display = 'none';
                insert.value = 'Вставить';

            } else {
                form.style.display = 'block';
                insert.value = 'Скрыть';

            }
        }

 /*
 function вставить в СУБД новый товар
 */   

         function checks(index,eror,id) {
             if (document.forms[index].name.value == '' || document.forms[index].count.value == '' || document.forms[index].price
                 .value == '' || document.forms[index].text.value == '') {
                eror.innerHTML = '<b>Вы незаполнили все поля</b>';
            } 
     
             else {
                 $.post('action.php', {
                         name: $(""+id+" input[name='name']").val(),
                         count: $(""+id+" input[name='count']").val(),
                        price: $(""+id+" input[name='price']").val(),
                         file: $(""+id+" file[name='file']").val(),
                        text: $(""+id+" textarea[name='text']").val(),
                        action: 'insert'
                    },
                    function() {
                        $("#table").load('cmsbody.php');
                         blockinsert('insert', 'insertbutton');
                    });

            }
          }

/*
Удаления из СУБД 
 */

        function delet(id) {
            $.ajax({
                url: 'action.php',
                method: 'GET',
                data: {
                    id: id,
                    action: 'delete'
                },

                success: function(data) {
                    $("#loader-identity").fadeIn(400);
                    $("#table").load('cmsbody.php');
                    $("#loader-identity").fadeOut(500);
                }
            });
            blockinsert(2,'insert', 'insertbutton');

        }
/*
обработчик изображений
 */
function LoadImg(idForm){
     var formData = new FormData($(idForm)[0]);
     $.ajax({
        url: 'upload.php',
        data: formData,
        dataType: "json",
        type: 'POST',
        contentType: false,
        processData: false,
        success: function (data){
             alert(data.filelink);
            }
        });

}
/*

Активный механизм аякс
 */

        $("document").ready(function() {
            $("#loader-identity").fadeIn(400);
            $('#table').load('cmsbody.php');
            $("#loader-identity").fadeOut(500);
           $('#submit_call').click(function() {
               checks(1,document.getElementById('error'),'#form2');
               $("#loader-identity").fadeOut(500);
            });
          

        });
 </script>

        <title><?php echo $title ?></title>
        <style>
      	 .modalDialog {
		position: fixed;
		font-family: Arial, Helvetica, sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 99999;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		display: none;
		pointer-events: none;
	}

	 .modalDialog:target {
		pointer-events:auto;
        display:block;
	} 

	.modalDialog > div {
		width: 400px;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 10px;
		background: #fff;
		background: -moz-linear-gradient(#fff, #999);
		background: -webkit-linear-gradient(#fff, #999);
		background: -o-linear-gradient(#fff, #999);
	} 

	 .close {
		background: #606061;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: -12px;
		text-align: center;
		top: -10px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	} 

	.close:hover { background: #00d9ff; }


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
        <link rel="stylesheet" href="./css/menu.css">
        <link rel="stylesheet" href="./css/loader.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/basket.css">
    </head>

    <body id='templatemo_body'>
        <?php require_once('../templates/header.php');?>
        <div id="loader-identity"></div>
        <center>
            <h1>CMS</h1>
        </center>
      

        <h3 style='margin:30px'><?=$user['user_name']?> </span> <?=$h1?></h3>
        <input type="button" name='insert' id='insertbutton' value='Вставить' onclick="insert()">
        <div id='table'>
        </div>
        <div id='insert' style='display:none'>
            <span id='error'></span>
            <form method="post" id='form2' enctype="multipart/form-data">
                <ul>
                    <li><label>Название</label></li>
                    <li> <input type="text" placeholder="Название" value="" name="name" required /></li>
                    <li><label>Количество</label></li>
                    <li> <input type="number" placeholder="Количество" value="" name="count" required /></li>
                    <li><label>Цена</label></li>
                    <li> <input type="number" placeholder="Цена" value="" name="price" required />
                 
                    <input type="hidden" value="300000" name="MAX_FILE_SIZE" /></li>
                    <li><label>Описание</label></li>
                    <li> <textarea name="text" cols='25' rows='15' placeholder="Описание">
                  </textarea>
                    </li>
                </ul>
                <input name="file" type="file" onchange="LoadImg('#form2')" /><span id='erorImj'></span>
                
                <input name="ok" type="button" value='Отправить' id='submit_call' />
            </form>
            <br>
        </div>
       
        <?php } 
else {
    echo "Не хуй сюда лезть";
}
?>
        </div>
        </div>
        </div>
    </body>

</html>