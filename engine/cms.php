<?php 
function insert($link,$src,$name,$text,$number,$price){
mysqli_query($link ,"INSERT INTO `product` (`src`, `name`, `text`, `count`, `number`, `price`)
    VALUES ('1','$name','$text','0','$number','$price')");
}

function update($link,$id,$src,$name,$text,$number,$price){
    mysqli_query($link ,"UPDATE `product` SET `src`='$src',
    `name`='$name',`text`='$text',`number`='$number',`price`='$price' WHERE `id`=$id");
 }

function delet($link,$id){
    mysqli_query($link,"DELETE FROM `product` where  id='$id'");
 } 
  
 function CMSsrcDownload($src)
 {
     if(is_uploaded_file($_FILES["filename"]["tmp_name"])  )
     {
 
         if($_FILES["filename"]["size"] > 1024*3*1024)
          {
             echo "Превышен размер файла";
          }
 
         else
         {
             if($_FILES['filename']['type']=='image/jpeg')
             {
                 $path=__DIR__.'/'.'img';
                 move_uploaded_file( $_FILES["filename"]["tmp_name"],  $path.'/'. $_FILES["filename"]["name"]);
                 echo 'Успех';
             }
 
             else
              {
                 echo 'Не правильный формат данных';
             }
 
         } 
     }
     else
     {
         echo 'Ошибка';
     }
 }   
?>