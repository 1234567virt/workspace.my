<?php
 require_once '../engine/init.php';
function registration($link,$login,$password,$name,$call){
    $login=clear($link,$login);
    $password=clear($link,$password);
    $name=clear($link,$name);
    $call=clear($link,$call);
    $password=password_hash ($password, PASSWORD_BCRYPT);
    mysqli_query($link ,"INSERT INTO `user`( `user_name`, `user_login`, `user_password`, `u_call`) VALUES
          ('$name','$login','$password','$call')");
       header("Location:../public_html/logout.php");

}
if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['call'])){
  registration($link,$_POST['login'],$_POST['password'],$_POST['name'],$_POST['u_call']);
}
else{
  echo "Ошибка пустые данные";
  // echo $_POST['login']."<br>";
  // echo $_POST['password']."<br>";
  // echo $_POST['name']."<br>";
}
 ?>