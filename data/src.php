<?php 
if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
{
echo 1;
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
?>