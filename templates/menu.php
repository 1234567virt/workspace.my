<?php
session_start();
require_once ('../engine/menu_builder.php');
//require_once('../templates/menu_builder.php');
                foreach($menu as $url=>$key){
                   echo  "<li><a href='".$url."'>".$key."</a></li>";
}
?>

<?php echo $_SESSION['success_message'];?>
        
                