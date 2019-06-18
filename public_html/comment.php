<?php 
require_once '../engine/init.php';
$comment=new Comment();
$massiv=$comment->Comments_catalog();
echo "<br>";
foreach($massiv as $key=>$val){
   echo "<hr>";
   echo "Дата:".$val['date']."<br>";
   echo "Автор:".$val['Aftor']."<br>";
   echo "Текст:".$val['text']."<br>";
}

?>