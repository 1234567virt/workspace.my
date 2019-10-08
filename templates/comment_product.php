<?php
//Вывод комментов в продукт
require_once '../engine/init.php'; 
$id=$_POST['id'];
$lim=0;
$comment=new Comment();
$massiv=$comment->Comments_product($id);
echo "<br>";
foreach($massiv as $key=>$val){
   if($key<3 ){
     
   echo "<hr>";
   echo "<span style='font-weight:700;'>Автор:</span>".$val['Aftor']."<br>";
   echo "<span style='font-style:italic;'>Текст:</span>".$val['text']."<br>";

}
else{
  
   $lim=$lim+5;
   
}

}
?>