<?php 
require_once '../engine/init.php';
$sql="SELECT * FROM `otziv`";
$massiv=mysqli_query($link,$sql);
echo "<br>";
while($rower = mysqli_fetch_array($massiv)){
      echo "<hr>";
      echo "Дата:".$rower['date']."<br>";
      echo "Автор:".$rower['Aftor']."<br>";
      echo "Текст:".$rower['text']."<br>";
     
}

?>