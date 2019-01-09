<?php
 require_once ('../engine/menu_builder.php');
 require_once ('../engine/init.php');
                foreach($menu as $url=>$key){
                   
                   echo  "<li><a href='".$url."'>".$key."</a></li>";
}

                  if($user){
                     ?>
              <style>
              .ddsmoothmenu ul li:nth-child(5){
                  display:none;
              }
              .ddsmoothmenu ul li:nth-child(6){
                  display:none;
              }
              </style>
                     <?php
                     if($user['role']=='admin'){
                        echo  "<li><a href='cms_catalog.php'>CMS</a></li>";
                     }

   ?> 
   
      <a href='basket.php' style='text-decaration:none;font-size:14px;color:blue'>Личный кабинет</a><br>
      <a href='/engine/exit.php' style='text-decaration:none;font-size:14px;color:blue'>Выйти</a>
                  
 <?php
}
                  else{
                     ?>
     
                  <?php
 }
 if(isset( $_SESSION['success_message'])){
 echo "<li>".$_SESSION['success_message']."</li>";
 unset($_SESSION['success_message']);
 }
?>


        
                