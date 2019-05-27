
<?php
require_once('../engine/init.php');
if(isset($user['user_login'])){
    require_once("../templates/dataClear.php"); 
    require_once("../templates/dataNull.php"); 
    if(isset($_GET['delete']) && isset($_GET['id'])){
        mysqli_query($link,"DELETE FROM `basket` where `id_product`=$arg1 and `id_user`=".$_SESSION['user_id']."");
      // echo $arg1;
       header('Location:../public_html/basket.php');
    }
    else
    {
        if(isset($_GET['id']) && isset($_GET['count']))
        {
            
            $massiv=mysqli_query($link,"select * from `product` where `number`>='$arg2' and `id`='$arg1'");
         //  echo $arg1.",".$arg2;
            $count_save=mysqli_num_rows($massiv);
           echo $count_save;
                if($count_save===0)
                {
                    echo 'Нехватает продукции';
                    header('Location:../public_html/basket.php');
                  die;
                }
                else
                {
                    while ($one= mysqli_fetch_array($massiv))
                    {
                        $name=$one['name'];
                        $row=mysqli_query($link,"select * from `basket` where `id_product`='$arg1' and `id_user`=".$_SESSION['user_id']."");
                        $count_basket=mysqli_num_rows($row);
                        if($count_basket===0)
                        {
                          
                           $user_id=$_SESSION["user_id"];
                           
                          // $name=$one["name"];
                           
                           insert_basket($link,$arg1,$user_id,$arg2);
                        
                        }
                        else
                        {
                            //$price_basket=$one["price"] * $arg2;
                            mysqli_query($link ,"UPDATE `basket` SET  `count`='$arg2' where `id_product`='$arg1' and id_user=".$_SESSION['user_id']."");
                       
                        }
                    }
                    header('Location:../public_html/basket.php');
                }
        }

        else
        {
             header('Location:../public_html/catalog.php');  
        }
 
    }
}
else{

  header('Location:../public_html/autorization.php');
}
?>

