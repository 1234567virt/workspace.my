<?php
require_once('../engine/connect.php');

function getUserEmail($link,$login){
   // $login=clear($link,$email);
    $result=mysqli_query($link ,"Select * from `user` where `user_login`='$login'") or die("Ошибка " . mysqli_error($link));
   $hash=null;
        while($row = mysqli_fetch_assoc($result)){
            $hash=$row;
            break;
        }
       return $hash;
}
function getUserId($link,$login){
    // $login=clear($link,$email);
     $result=mysqli_query($link ,"Select * from `user` where `id_user`='$login'") or die("Ошибка " . mysqli_error($link)); 
    $hash=null;
         while($row = mysqli_fetch_assoc($result)){
             $hash=$row;
             break;
         }
        return $hash;
 }
 class Requests extends Connect {
    public function __construct () {
     
    }
    function getRequestsProduct(){
        $sql="SELECT * FROM `product`";
        $obj=self::connecting();
        $result=$obj->query($sql)->fetchAll();
        if($obj->query('SELECT COUNT(*) FROM `product` ')->fetchColumn()===0)
        {
            return false;
        }
        else{
            return $result;
        }
    } 
    function getRequestsOtziv($marka){
        $this->marka=$marka;
        $sql="SELECT * FROM `product` where 'name'='$this->marka";
        $obj=self::connecting();
        $result=$obj->query($sql)->fetchAll();
        if($obj->query("SELECT COUNT(*) FROM `product` where 'name'='$this->marka")->fetchColumn()===0)
        {
            return false;
        }
        else{
            return $result;
        }
    }
 }
 ?>