<!DOCTYPE html>
<html lang="ru">
<?php
$title="Создание";
$date=date("Y");
require_once('../engine/init.php');
    $name=isset($_GET['name'])?  $_GET['name'] : '';
    $price=isset($_GET['price'])? $_GET['price'] : ''; 
    $number=isset($_GET['number'])?  $_GET['number'] : '';
    $arg1=isset($_GET['text'])? $_GET['text'] : ''; 
    $id=isset($_GET['id'])? $_GET['id'] : ''; 
    $src=isset($_GET['src'])? $_GET['src'] : ''; 
        if(isset($_GET['ok'])){
            if(isset($_GET['id'])!=''){
                echo 1;
                update($link,$_GET['id'],'/public_html/img/nout3.jpg ',$_GET['name'],$_GET['text'],$_GET['number'],$_GET['price']);
                header('Location:../public_html/cms_catalog.php');
            }
                else{
                 
            insert($link,$_GET['src'],$_GET['name'],$_GET['text'],$_GET['number'],$_GET['price']);
             header('Location:../public_html/cms_catalog.php');
            }
         }
            if(isset($_GET['id'])){
               $id=clear($link,$_GET['id']);
               $sql="SELECT * FROM `product` WHERE `id`=$id";
                 $result = mysqli_query($link, $sql); 
                while ($row = mysqli_fetch_array($result))
                {
                        $name=$row['name'];
                        $price=$row['price'];
                        $number=$row['number'];
                        $text=$row['text'];
                        $src=$row['src'];
                }
                $h1="Редактировать";
            }
            else{
                $h1="Создание";
                $name='';
                $price='';
                $number='';
                $text='';
                $src='';
            }
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
        <link rel="stylesheet" href="./css/menu.css">
         <link rel="stylesheet" href="./css/calc.css"> 
         <link rel="stylesheet" href="./css/header.css"> 
         <link rel="stylesheet" href="./css/insert_cms.css"> 
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
    <center style="margin-top:5px;"><?php echo $h1 ?></center>
    
 <div id="contact_form">
       
       <form method="get" enctype="multipart/form-data" class="contact_form" action="../public_html/insert_cms.php">
    

           <ul>
                <li><label>Название</label></li>
                <li>    <input type="text" placeholder="Название" value="<?=$name ?>" name="name" required /></li>
                <li><label>Количество</label></li>
                <li>    <input type="number" placeholder="Количество" value="<?=$number?>" name="number" required  /></li>
                <li><label>Цена</label></li>
                <li>   <input type="number" placeholder="Цена" value="<?=$price?>" name="price" required  />
                <input type="hidden" value="<?=$id?>" name="id"/></li>
                <input type="hidden" value="30000" name="MAX_FILE_SIZE" /></li>
                <li><label>Описание</label></li>
                <li>    <textarea  name="text" cols='40' rows='40'  placeholder="Описание" ><?=$text?>
                  </textarea>     
                </li>
            </ul>
            <input name="userfile" type="file" value='<?=$src?>'/>
            <input name="ok" type="submit" value='Отправить' class='submit_call'/>
        </form>

            <br>
    </div>
    </div>
</body>
</html>

