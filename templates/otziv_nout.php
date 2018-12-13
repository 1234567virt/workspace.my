<?php 
//$sql="SELECT * FROM `otziv_nout` WHERE `marka`='$marka'";
//$massiv=mysqli_query($link,$sql);
$id=(int)$_GET['id'];
$answer=getRequestsOtziv($link,$marka);
echo "<br>";
 //  while($rower = mysqli_fetch_array($massiv)){
    foreach($answer as $key=>$rower){
          echo "<hr>";
          echo "Автор:".$rower['Aftor']."<br>";
          echo "Текст:".$rower['text']."<br>";
    }
//}

 ?>