<?php
$name = $_POST['fname'];
$rno = $_POST['id'];
require_once('../engine/init.php');
$sql = "SELECT * from `basket` where id='$rno'";
$result = mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
echo $row['name'];
?>