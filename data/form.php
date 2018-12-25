<html>
<head>
    <title>Загрузка файлов на сервер</title>
</head>
<body>
    <h2>Форма для загрузки файлов</h2>
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->

      <form method="post" enctype="multipart/form-data" class="contact_form" action="../data/src.php">
    
         <label>Название</label>
             <input type="text" placeholder="Название" value="" name="name" required />
         <label>Количество</label>
            <input type="number" placeholder="Количество" value="" name="number" required  />
         <label>Цена</label>
            <input type="number" placeholder="Цена" value="" name="price" required  />
         <input type="hidden" value="" name="id"/>
         <textarea  name="text" cols='40' rows='40'  placeholder="Описание" > </textarea>  
        
       
     <input name="filename" type="file"/>
     <input name="ok" type="submit" value='Отправить' class='submit_call'/>
 </form>
</body>
</html>