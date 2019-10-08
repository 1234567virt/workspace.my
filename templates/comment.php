<?php 
//Вывод коментов в каталог
require_once '../engine/init.php';
$comment=new Comment();
$massiv=$comment->Comments_catalog($_POST['limit']);
echo "<br>";
 foreach($massiv as $key=>$val){
   echo "<hr>";
    echo "<span style='font-size:18px;font-weight:700'>Дата:</span><i>".$val['date'];
    echo "</i><span style='font-size:18px;font-weight:700; padding-left:10px'>Автор:</span>".$val['Aftor']."<br>";
    echo "<span style='font-style:italic'>Текст:</span>".$val['text']."<br>";
 }
 if(count($massiv)!=5){
   echo '<style>#limcoment{pointer-events: none;}<style>';
 }
 ?>