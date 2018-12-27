
<?php
require_once('../engine/init.php');
if(isset($user['user_login'])){
    require_once("../templates/dataClear.php"); 
    require_once("../templates/dataNull.php"); 
    if(isset($_GET['delete']) && isset($_GET['id'])){
        mysqli_query($link,"DELETE FROM `basket` where `id_product`=$arg1" );
       echo $arg1;
       header('Location:../public_html/basket.php');
    }
    else
    {
        if(isset($_GET['id']) && isset($_GET['count']))
        {
            
            $massiv=mysqli_query($link,"select * from `product` where `number`>='$arg2' and `id`='$arg1'");
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
                        $row=mysqli_query($link,"select * from `basket` where `name`='$name'");
                        $count_basket=mysqli_num_rows($row);
                        if($count_basket===0)
                        {
                          
                           $user_id=$_SESSION["user_id"];
                           $src=$one["src"];
                           $name=$one["name"];
                           $price=$one["price"];
                           insert_basket($link,$_SESSION['user_id'],$one['src'],$one['name'],$one['price'],$arg2,$arg1);
                        
                        }
                        else
                        {
                            mysqli_query($link ,"UPDATE `basket` SET  `count`='$arg2' where `name`='$name'");
                        echo 2;
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

