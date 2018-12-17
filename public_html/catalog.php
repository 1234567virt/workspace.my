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
.price{
    color:#11bdd1;
    font-size: 14px;
	font-weight: 700;
    
}
.name {
	font-size: 12px;
	color: #000;
	font-weight: 700;
	margin-bottom: 10px;
}
.name a{
    text-decoration:none;
    color: #000;

}
.basket{
    width:75px;
    height:20px;
    border-radius:10px;
    color:green;
    font-size:11px;
    font-family:Tahoma, Geneva, sans-serif;
    font-weight: 700;
   background:white;
    box-shadow: 3px 5px 16px rgba(9,9,6,.5);
}


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


#contact{
    margin:10px auto;
    width: 900px;
    height: 400px;
}
#contact label {
    margin-left:10px;
    margin-top:10px;
    font-size:15px;
    color:white;
    font-family:Arial;
}


#contact input[type="text"] {
    margin-top:10px;

    width: 500px;
    height: 40px;
    background: #f8f8f8;
    border-radius: 10px;
    box-shadow: 1px 1px 2px black, 0 0 1em red;
    text-align: center;
}
.submit_call{
  
   margin:0 auto;
    width: 150px;
    height: 50px;
    border-radius: 10px;
    border: 0px solid transparent;
    margin-top: 10px;
    margin-left: 45px;
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


 textarea{
   
    margin-top:15px;
    border:1px solid green;
     border-radius:10px;
    width: 800px;
    height: 180px;
    }

textarea:focus{
    text-transform: capitalize;
}
    </style>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="./css/menu.css">
    
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

