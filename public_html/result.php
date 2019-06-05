<?php
require_once('../engine/init.php');
if(isset($_POST['hero']) && isset($_POST['numberOne']) && isset($_POST['numberTwo'])){
    $arg1=(int)$_POST['numberOne'];
    $arg2=(int)$_POST['numberTwo'];
    $hero=$_POST['hero'];
        $result=mathOperation(clear($link,$arg1),clear($link,$arg2),clear($link,$hero));
        echo json_encode($result);
    }
   
?>