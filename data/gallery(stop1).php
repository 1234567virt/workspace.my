<?php
//require_once ('../engine/galerey_builder.php');
require_once('../engine/galerey_builder.php');
foreach($gallery as $key=>$val){
    echo "<a href='".$key."' target='_blank' ><img src='".$key."'";
   
    foreach($val as $title=>$src){
        echo $imgs="alt='".$src."' class='catalog' ". " title='".$title."' width='30%'></a>";
                
    }
}
?>