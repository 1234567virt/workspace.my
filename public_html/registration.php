<?php
require_once('../engine/db_connect.php');
require_once('../engine/funcs.php');
session_start();
$login=isset($_POST['login'])?  $_POST['login'] : '';
$password=isset($_POST['password'])?  $_POST['password'] : '';
$name=isset($_POST['name'])?  $_POST['name'] : '';
$call=isset($_POST['call'])?  $_POST['call'] : '';
registration($link,$_POST['login'],$_POST['password'],$_POST['name'],$_POST['call']);

 ?>