<?php
function rewiev($link,$Aftor,$Message,$id){
   $date=date('Y-m-d',time());
      if(isset($Aftor) && isset($Message) && isset($id)){
         $Aftor=clear($link,$Aftor);
         $message =clear($link,$Message);
         $id=clear($link,$id);
         $date=date('Y-m-d',time());
         $sql="INSERT INTO  `otziv` (`id_galerey`, `Aftor`, `text`, `date`) VALUES ('$id','$Aftor','$message','$date')";
         mysqli_query($link,$sql);
      }
      if(mysqli_error($link)){
         die(mysqli_error($link));
      }
header("Location:../public_html/catalog.php?id='$id'");
}

function review_nout($link,$Aftor,$Message,$id,$marka){
   if(isset($Aftor) && isset($Message) && isset($id)){
      $Aftor=clear($link,$Aftor);
      $message =clear($link,$Message);
     $marka=clear($link,$marka);
      $sql="INSERT INTO  `otziv_nout` (`id`,`marka`, `Aftor`, `text`) 
      VALUES ('$id','$marka','$Aftor','$message')";
      mysqli_query($link,$sql);
   
   }
   if(mysqli_error($link)){
      die(mysqli_error($link));
}
header("Location:../public_html/product.php?id=$id");
}
?>