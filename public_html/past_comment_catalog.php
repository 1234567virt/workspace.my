<?php
require_once('../engine/init.php');
$review=new Comment();
if(isset($_POST['marka'])){
        review_nout($link,$_POST['Aftor'],$_POST['Message'],$_POST['id'],$_POST['marka']);

    }
else{
       $review->rewiev($_POST['Aftor'],$_POST['Message']);

}