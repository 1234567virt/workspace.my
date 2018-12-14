<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <?php
   

    $title="Регистрация";
    $h1="Зарегистрироваться";
    $year=date("Y");
  
   // require_once '../engine/init.php';
?>
	<title><?=$title;?></title>
	<link rel="stylesheet" media="screen" href="./css/styles.css" >
</head>
<body>
<form class="contact_form" action="../engine/authorization_function.php" method="post" >
    <ul>
        <li>
             <h1><?=$h1?></h1>
        
        </li>
     
            <label >Логин:</label>
            <input type="email" name="log" placeholder="login" required />
        
        </li>
        <li>
            <label >Пароль:</label>
            <input type="password" name="pas"   placeholder="Пароль" required />
        </li>
        <li>
             <button class="submit" type="submit" >Отправить</button>
        </li>
   
    </ul>
</form>
</body>
</html>