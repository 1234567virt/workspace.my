<?php
//session_start();
require_once ('../engine/menu_builder.php');
 require_once ('../engine/init.php');
                foreach($menu as $url=>$key){
                   echo  "<li><a href='".$url."'>".$key."</a></li>";
}

 if($user){
echo "<a href='basket.php' style='text-decaration:none;font-size:14px;color:blue'>Личный кабинет</a><br>";
echo "<a href='exit.php' style='text-decaration:none;font-size:14px;color:blue'>Выйти</a>";

}
 else{
echo "<a href='../public_html/authorization.php' style='text-decaration:none;font-size:14px;color:blue'>Войти</a>";
 }

 if(isset( $_SESSION['success_message'])){
 echo $_SESSION['success_message'];
 unset($_SESSION['success_message']);
 }
?>


        
                