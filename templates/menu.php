<?php
 require_once ('../engine/menu_builder.php');
 
                foreach($menu as $url=>$key){
                   
                   echo  "<li><a href='".$url."'>".$key."</a></li>";
}

                  if(isset($user)){
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
                     if(isset($_SESSION['user_id'])){
                        echo  " <a href='basket.php' style='text-decaration:none;font-size:14px;color:blue'>Личный кабинет</a><br>";
                        echo " <a href='/engine/exit.php' style='text-decaration:none;font-size:14px;color:blue'>Выйти</a>";
                      }
}
 else{
    echo 1;
 }

?>


        
                