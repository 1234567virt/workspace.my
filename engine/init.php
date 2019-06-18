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
//require_once('../engine/captcha_class.php');

$user=null;
if(isset($_SESSION['user_id'])){
    
    $user=getUserId($link,$_SESSION['user_id']); 

}
?>