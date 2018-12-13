<?php
//второе задание
function one($path){
    $dir=scandir($path);
        foreach($dir as $key=>$val){
            if($val==='.' || $val==='..'){
                continue;
            }
            else{
                if(is_dir($path.$val)){
                     one($path.$val.DIRECTORY_SEPARATOR);
                }
                 else{
                     $info=pathinfo($path.$val);
                    if($info['extension']=='jpg'){
                      echo "<a href='".$path.$val."' target='__blank'><img src='".$path.$val."' class='catalog' width='30%'></a>";
                  
                    }  
  
                         
                }
            }   
         }
}




?>