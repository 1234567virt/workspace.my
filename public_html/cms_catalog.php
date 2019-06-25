<!DOCTYPE html>
<html lang="ru">
<?php
 require_once '../engine/init.php';
 require_once '../engine/cms_autoload.php';
 if($user['role']=='admin'){
 $h1="Купите у нас хоть что-нибудь!!!!";
$title="Корзина";
require_once "../templates/dataNull.php"; 
$error='';
$arg2=0;
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<meta charset="UTF-8">
<style>
    #insert{
        width:400px;
        height:400px;
        border:1px solid black;
        padding-left:15px;
      
    }
    ul{
        list-style-type:none;
    }
</style>
    <script type="text/javascript" src="https://use.fontawesome.com/452826394c.js"></script>
    <script type="text/javascript">
      function blockinsert(insert,insertbutton){
        document.forms[1].reset();
        var blockinsert=document.getElementById(insert);
        var insertbutons=document.getElementById(insertbutton);
        blockinsert.style.display='none';
        insertbutons.value='Вставить';
      }

      function insert(){
        var insert=document.getElementById('insertbutton');
        var form=document.getElementById('insert');
        var forminsert=document.getElementById('insertform');
        if(form.style.display=='block'){
            form.style.display='none';
            insert.value='Вставить';
           
        }
        else{
            form.style.display='block';
            insert.value='Скрыть';
          
        }
       }
 function checks(val){
    if(document.forms[1].name.value=='' || document.forms[1].number.value=='' || document.forms[1].price.value=='' || document.forms[1].text.value==''){
         val.innerHTML='<b>Вы незаполнили все поля</b>';
          }  
          else{
                $.post('action.php',{ name:$("input[name='name']").val(),
                                number:$("input[name='number']").val(),
                                price:$("input[name='price']").val(),
                            
                                filename:$("input[name='filename']").val(),
                                text:$("textarea[name='text']").val(),
                                action:'insert'},
                 function(){ $("#table").load('cmsbody.php');   });
                 
            }
        
blockinsert('insert','insertbutton');
 }
 function delet(id){
    $.ajax({
         url:'action.php',
         method:'GET',
         data:{id:id, action:$('input[name="delete"]').val()},
     
         success:function(data){
            $("#loader-identity").fadeIn(400); 
             $("#table").load('cmsbody.php');
             $("#loader-identity").fadeOut(500);
         }
    });
    blockinsert('insert','insertbutton');
   
 }
 $("document").ready(function(){
    $("#loader-identity").fadeIn(400); 
    $('#table').load('cmsbody.php');
    $("#loader-identity").fadeOut(500);
    $('#submit_call').click(function(){
    checks(document.getElementById('error'));
    //document.forms[1].reset();

    $("#loader-identity").fadeOut(500); 
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
    <link rel="stylesheet" href="./css/menu.css">
     <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/header.css"> 
    <link rel="stylesheet" href="./css/basket.css"> 
</head>
<body id='templatemo_body' >
<?php require_once('../templates/header.php');?>
<div id="loader-identity"></div>
                <center>  <h1>CMS</h1></center>
                <h3 style='margin:30px'><?=$user['user_name']?> </span> <?=$h1?></h3>
                <input type="button" name='insert' id='insertbutton' value='Вставить' onclick="insert()">
                <div id='table'>
                </div>
        <div id='insert' style='display:none'>
        <span id='error'></span>
        <form method="post" id='form2' enctype="multipart/form-data">
            <ul>
                <li><label>Название</label></li>
                <li>    <input type="text" placeholder="Название" value="<?=$name ?>" name="name" required /></li>
                <li><label>Количество</label></li>
                <li>    <input type="number" placeholder="Количество" value="<?=$number?>" name="number" required  /></li>
                <li><label>Цена</label></li>
                <li>   <input type="number" placeholder="Цена" value="<?=$price?>" name="price" required  />
                <input type="hidden" value="<?=$id?>" name="id"/></li>
                <input type="hidden" value="300000" name="MAX_FILE_SIZE" /></li>
                <li><label>Описание</label></li>
                <li>    <textarea  name="text" cols='25' rows='15'  placeholder="Описание" ><?=$text?>
                  </textarea>     
                </li>
            </ul>
            <input name="filename" type="file"/>
            <input name="ok" type="button" value='Отправить' id='submit_call'/>
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

