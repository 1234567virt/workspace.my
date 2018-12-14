<?php
    // require_once('/opt/lampp/htdocs/workspace.my/engine/db_connect.php');
  
   $id=$_GET['id'];
   $sql="SELECT * FROM `gallery` WHERE id_galerey=$id order by count desc";
     $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
     $num_rows = mysqli_num_rows( $result);
     if($num_rows>0){
     while ($row = mysqli_fetch_array($result))
         {
             echo "<a href='product.php?id=".$row['id']."'   target='_blank'><img src='".$row['img']."' title='".$row['title']."'alt='".$row['alt']."' width='".$row['size']."%' class='catalog' >".$row['count']."</a>";
         }  
        }
        else {
             echo "Ошибка";
        }
   

?>