<?php
require_once '../engine/init.php'; 
$id=$_POST['id'];

$comment=new Comment();
$massiv=$comment->Comments_product($id);
echo "<br>";
foreach($massiv as $key=>$val){
   echo "<hr>";
   echo "Автор:".$val['Aftor']."<br>";
   echo "Текст:".$val['text']."<br>";
}
?>