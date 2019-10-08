<?php
 require_once ('../engine/menu_builder.php');
 //Меню Динамическое выводиться с помощью сервера
                foreach($menu as $url=>$key){
                   
                   echo  "<li><a href='".$url."'>".$key."</a></li>";
}
//Кусок начинает выводиться только после аутентификации
                  if(isset($user)){
                     ?>
<style>
.ddsmoothmenu ul li:nth-child(5) {
    display: none;
}

.ddsmoothmenu ul li:nth-child(6) {
    display: none;
}
</style>
<?php
//Кусочек кода выводиться если зайти как админ
                     if($user['role']=='admin'){
                        echo  "<li><a href='cms_catalog.php'>CMS</a></li>";
                     }
                     //Конец куска
                     if(isset($_SESSION['user_id'])){
                        echo  " <a href='basket.php' style='text-decaration:none;font-size:14px;color:blue'>Личный кабинет</a><br>";
                        echo " <a href='/engine/exit.php' style='text-decaration:none;font-size:14px;color:blue'>Выйти</a>";
                      }
                      
}
 else{
    
 }

?>