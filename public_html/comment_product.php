<?php
//Загрузка комментов
require_once '../engine/init.php'; 
$id=$_POST['id'];
$comment=new Comment();
$massiv=$comment->Comments_product($id);
echo "<br>";
foreach($massiv as $key=>$val){
   echo "<hr>";
   echo "<span style='font-weight:700;'>Автор:</span>".$val['Aftor']."<br>";
   echo "<span style='font-style:italic;'>Текст:</span>".$val['text']."<br>";
}
?>