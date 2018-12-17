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
    <style>
   #formH{
    width: 700px;
    height: 70px;
    border:0px;
    margin: 100px auto;
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

 #formH input[type="number"] {
    width: 90px;
    height: 35px;
    background: #f8f8f8;
    border-radius: 10px;
    box-shadow: 1px 1px 2px black, 0 0 1em red;
    text-align: center;
}
#formH #select{
    width: 35px;
    height: 35px;
    background: #f8f8f8;
    border-radius: 10px;
    box-shadow: 1px 1px 2px black, 0 0 1em red;
    text-align: center;
}

.submit_call{
   
    width: 150px;
    height: 50px;
    border-radius: 10px;
    border: 0px solid transparent;
    margin-top: 10px;
    margin-left: 40px;
    border-color: aqua;
    background: burlywood;

}

.submit_call:hover{
   
   width: 150px;
   height: 50px;
   border-radius: 10px;
   border: 0px solid transparent;
   margin-top: 10px;
   margin-left: 40px;
   border-color: black;
   background:grey;

}
#contact_form{
    margin-left:500px;
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
                    <div id="site_title"><h1><a href="#"><?php echo $h1 ?></a></h1></div>
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
    <center style="margin-top:5px;"><h1>Калькулятор</h1></center>
   <div id="contact_form">
      
    <form method="post" id="formH" action="<?="calc.php";?>">
  
    <input type="number" placeholder="Значение 1" value="<?=$arg1;?>" name="numberTwo" required class="required input_field" />

   <select name="hero" id="select" >
    <option disabled></option>
     <option value="+">+</option>
     <option  value="-">-</option>
     <option  value="*">*</option>
     <option  value="/">/</option>
</select>
    <input type="number" placeholder="Значение 2" value="<?=$arg1;?>" name="numberOne" required class="validate-email required input_field" />
<br>
   <input type="submit" class="submit_call" name="submit" value="Расчитать" />
<br>
<?php
if(isset($_POST['hero']) && isset($_POST['numberOne']) && isset($_POST['numberTwo'])){
    $arg1=(int)$_POST['numberOne'];
    $arg2=(int)$_POST['numberTwo'];
    $hero=$_POST['hero'];
        $result=mathOperation(clear($link,$arg1),clear($link,$arg2),clear($link,$hero));
        echo "<span style='color:white;font-size:15px ;padding-left:100px'>Ответ:".$result."<span>";
    }
    ?>
    </div>
    </div>
</body>
</html>

