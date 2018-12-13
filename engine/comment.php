<?php
function rewiev($link,$Aftor,$Message,$id){
   $date=date('Y-m-d',time());
      if(isset($_POST['Aftor']) && isset($_POST['Message']) && isset($_POST['id'])){
         $Aftor=clear($link,$_POST['Aftor']);
         $message =clear($link,$_POST['Message']);
         $id=clear($link,$_POST['id']);
         $date=date('Y-m-d',time());
         $sql="INSERT INTO  `otziv` (`id_galerey`, `Aftor`, `text`, `date`) VALUES ('$id','$Aftor','$message','$date')";
         mysqli_query($link,$sql);
      }
      if(mysqli_error($link)){
         die(mysqli_error($link));
      }
header("Location:catalog.php?id='$id'");
}

function review_nout($link,$Aftor,$Message,$id,$marka){
   if(isset($_POST['Aftor']) && isset($_POST['Message']) && isset($_POST['id'])){
      $Aftor=clear($link,$_POST['Aftor']);
      $message =clear($link,$_POST['Message']);
      $id=clear($link,$_POST['id']);
      $sql="INSERT INTO  `otziv_nout` (`marka`, `Aftor`, `text`) VALUES ('$marka','$Aftor','$message')";
      mysqli_query($link,$sql);
   }
   if(mysqli_error($link)){
      die(mysqli_error($link));
}
header("Location:product.php?id='$id'");
}
?>