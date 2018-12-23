<html>
<head>
    <title>Загрузка файлов на сервер</title>
</head>
<body>
    <h2>Форма для загрузки файлов</h2>
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->

    <form action="src.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="10000">
        <input type="file" name="filename"><br>
        <input type="submit" value="Загрузить"><br>
    </form>
</body>
</html>