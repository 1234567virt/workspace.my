<?php
 function mail_register($to,$subject,$message,$headers){
 $value=mail($to,$subject,$message,$headers);   
if($value){
    echo "Отправка письма закончилась удачно";
}
else{
    echo "Ошибка письмо неотправленно";
}
}?>