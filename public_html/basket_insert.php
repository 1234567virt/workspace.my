
<?php
require_once('../engine/init.php');
////
if(isset($user['user_login'])){

      $massiv=mysqli_query($link,"select * from `product` where `number`>='$arg2' and `id`='$arg1'");
      $count_save=mysqli_num_rows($massiv);
      
      if($count_save===0){
         echo 'Нехватает продукции';
         header('Location:../public_html/basket.php');
      }
      else{
         while ($one= mysqli_fetch_array($massiv)){
            insert_basket($link,$arg,$_SESSION['user_id'],$one['name'],$arg2);
         }
          echo 'Вставить';
          header('Location:../public_html/basket.php');
      }
   }
   ////
      else{
         echo "Ошибка";
      }
     

?>

