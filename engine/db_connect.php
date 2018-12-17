<?php 
require_once __DIR__.'/pass.php';
$link = mysqli_connect($host, $user,$password,$bd) 
    or die("Ошибка " . mysqli_error($link)); 
   // mysql_query('SET NAMES utf8');
    ?>