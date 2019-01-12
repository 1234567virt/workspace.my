<?php 

// $headers='From:vitte@gmail.ru'."\r\n".
// 'Replay-To:vitte@bk.com'."\r\n".
// 'X-Mailer:PHP/'.phpversion();
// $message='Поздравляю вас с получением учетной записи на нашем сайте ваш логин ';
// echo mail('krupenkosm@bk.ru','Ваш логин и пароль',$message);
// echo $message;

?>
<script>
function form_val(){
    cls=document.forms[0].elements;
    for(var i=0;i<class.length;i++){
        if(cls[i].type==='text' || cls[i].type==='number'|| cls[i].type==='email'){
            var count=cls[i].value;
            if(cls[i].type==='text' && count.length<10){
              result='Вы мало написали';
            }

            elseif (cls[i].type==='number' && count.length>11){
                result='Вы вели неправильный телефон';
            }

            elseif(cls[i].type=='email' && count.length<6){
                result="странное мыло";
            }
        }

    }
    return result;
}

</script>