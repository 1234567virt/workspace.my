<?php 

$id=$_GET['id'];

$answer=getRequestsOtziv($link,$marka);
echo "<br>";
      foreach($answer as $key=>$rower){
          echo "<hr>";
          echo "Автор:".$rower['Aftor']."<br>";
          echo "Текст:".$rower['text']."<br>";
    }
    

 ?>