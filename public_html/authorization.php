<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <?php
    //require_once('../engine/init.php'); 
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
        <li><?php if(isset($error)){
      echo  "<h4 style='color:red;font-size-14px'>.$error.</h4></li>"; }?>
        <li>
            <label >Логин:</label>
            <input type="email" name="login" placeholder="Email" required />
        
        </li>
        <li>
            <label >Пароль:</label>
            <input type="password" name="password"   placeholder="Пароль" required />
        </li>
        <li>
             <button class="submit" type="submit" >Отправить</button>
        </li>
   
    </ul>
</form>
</body>
</html>