<?php
if(isset($_POST['hero']) && isset($_POST['numberOne']) && isset($_POST['numberTwo'])){
    $arg1=(int)$_POST['numberOne'];
    $arg2=(int)$_POST['numberTwo'];
    $hero=$_POST['hero'];
        $result=mathOperation(clear($link,$arg1),clear($link,$arg2),clear($link,$hero));
        echo "<span style='color:white;font-size:15px ;padding-left:100px'>Ответ:".$result."<span>";
    }
?>