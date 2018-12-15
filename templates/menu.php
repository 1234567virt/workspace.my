<?php
//session_start();
 require_once ('../engine/menu_builder.php');
 require_once ('../engine/init.php');
                foreach($menu as $url=>$key){
                   echo  "<li><a href='".$url."'>".$key."</a></li>";
}

                  if($user){
   ?> 
                  <a href='basket.php' style='text-decaration:none;font-size:14px;color:blue'>Личный кабинет</a><br>
                  <a href='exit.php' style='text-decaration:none;font-size:14px;color:blue'>Выйти</a>
                  
 <?php
}
                  else{
                     ?>
                  <a href='../public_html/authorization.php' style='text-decaration:none;font-size:14px;color:blue'>Войти</a>
                  <?php
 }
 if(isset( $_SESSION['success_message'])){
 echo $_SESSION['success_message'];
 unset($_SESSION['success_message']);
 }
?>


        
                