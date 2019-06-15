<?php
require_once('../engine/connect.php');
// function getRequestsProduct($link){

// $sql="SELECT * FROM `product`";
//     $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
//     $num_rows = mysqli_num_rows( $result);
//     $product = [];
//     if($num_rows>0){
//     while ($row = mysqli_fetch_assoc($result)){
//        $product[]=$row;
//     }
//   }
//  return $product;
// }

// function getRequestsOtziv($link,$marka){
//     $sql="SELECT * FROM `otziv_nout` WHERE `name`='$marka'"; 
//     $result=mysqli_query($link,$sql) or die("Ошибка " . mysqli_error($link));
//     $num_rows = mysqli_num_rows( $result);
//     $answer= [];
//     if($num_rows>0){
//          while($row = mysqli_fetch_assoc($result)){
//             $answer[]=$row;
//         }
//     }
//     return $answer;
// }
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
        if($obj->query('SELECT COUNT(*) FROM `product` ')->fetchColumn()===0)
        {
            return false;
        }
        else{
            return $result;
        }
    }
 }
 ?>