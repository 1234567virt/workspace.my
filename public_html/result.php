<?php
require_once('../engine/calc_function.php');
require_once('../engine/init.php');
if(isset($_POST['hero']) && isset($_POST['numberOne']) && isset($_POST['numberTwo'])){
    $calc=new MathO();
    $result=$calc->mathOperation($_POST['numberOne'],$_POST['numberTwo'],$_POST['hero']);
    echo json_encode($result);
    }
   
?>