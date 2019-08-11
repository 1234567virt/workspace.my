<?php
session_start();
require_once('../engine/pass.php');
require_once('../engine/db_connect.php');
require_once('../engine/menu_builder.php');
require_once('../engine/funcs.php');
require_once('../engine/calcfunc_class.php');
require_once('../engine/comment_class.php');
require_once('../engine/requests_class.php');
require_once('../engine/basket_class.php');
require_once('../engine/cms_class.php');
require_once('../engine/registration_class.php');
require_once('../engine/authorization_function.php');
require_once('../engine/connect.php');
$users=new  Registration();
$user=null;
if(isset($_SESSION['user_id'])){
     $user=$users->getUserId($_SESSION['user_id']); 
//echo $_SESSION['user_id'];
}
?>