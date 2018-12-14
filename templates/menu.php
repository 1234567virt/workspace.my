<?php
//session_start();
require_once ('../engine/menu_builder.php');
 require_once ('../engine/init.php');
                foreach($menu as $url=>$key){
                   echo  "<li><a href='".$url."'>".$key."</a></li>";
}

 if($user){
echo "<a href='#'>".$user['user_name']."</a>";
echo "<a href='exit.php'>Выйти</a>";
//unset($user['user_name']);
}
 else{
echo "<a href='../public_html/authorization.php'>Войти</a>";
 }

 if(isset( $_SESSION['success_message'])){
 echo $_SESSION['success_message'];
 unset($_SESSION['success_message']);
 }
?>


        
                