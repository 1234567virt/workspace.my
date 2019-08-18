<?php
require_once('../engine/init.php');
if(isset($user['user_login'])){
    require_once("../templates/dataClear.php"); 
    require_once("../templates/dataNull.php"); 
    $obj=new Basket();
    if(isset($_GET['delete']) && isset($_GET['id'])){
    $obj->delete_basket($_GET['id'],$_SESSION['user_id']);
       header('Location:../public_html/basket.php');
    }
    else
    {
        if(isset($_GET['id']) && isset($_GET['count']))
        {
          
        $result=$obj-> basket_cantroler1($_GET['count'],$_GET['id']);
         
                if($result===0)
                {
                   echo 'Нехватает продукции';
                    header('Location:../public_html/basket.php');
                  die;
                }
                else
                {
                   foreach ($result as $key=>$one)
                    {
                        $name=$one['name'];
                      
                       $count_basket=$obj->basket_cantroler2($arg1,$_SESSION['user_id']);
                      
                        
                        if($count_basket==0)
                        {
                      
                           $user_id=$_SESSION["user_id"];
                           $name=$one["name"];
                           $obj->insert_basket($arg1,$user_id,$arg2);
                        
                        }
                        else
                        {
                           $obj->update_basket($_SESSION['user_id'],$arg1,$arg2);
                     
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
