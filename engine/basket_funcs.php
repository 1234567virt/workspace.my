<?php
// class Connects{
//   const HOST = 'localhost';
//   const  NAME = 'php1level5';
//   const  USER ='serj';
//    const PASS=22121987;
//   const  DRIVER='mysql';
//   public function connecting () {
//       return new PDO(self::DRIVER . ':host='. self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
//   }
//   function clear($val){
//       $value=htmlspecialchars(strip_tags($val));
//       return $value;
//   }
// }

//  function insert_basket($link,$idproduct,$user_id,$count){
//     mysqli_query($link ,"INSERT INTO `basket` (`id_product`,`id_user`, `count`) VALUES ('$idproduct',$user_id,$count)");
    
//  }
  
//   function delete_basket($link,$id){
//     mysqli_query($link,"DELETE FROM `basket` where `id`='$id'" );
// } 
// function getSelectProducts($link,$id){
//  $result=mysqli_query($link,"SELECT * FROM `product` where `id`=$id" ) or die("Ошибка " . mysqli_error($link)); 
//   return $result;
// } 
//"DELETE FROM `basket` where `id_product`=$arg1 and `id_user`=".$_SESSION['user_id']."";
require_once('../engine/connect.php');
class Basket extends Connect {
  public function  __construct(){

  }
 public function insert_basket($idproduct,$user_id,$count){
    $this->idproduct=self::clear($idproduct);
    $this->user_id=self::clear($user_id);
    $this->count=self::clear($count);
    $obj=self::connecting();
    $sql="INSERT INTO `basket` (`id_product`,`id_user`, `count`) VALUES ('$this->idproduct',$this->user_id,$this->count)";
    $obj->query($sql);
  }
  public function delete_basket($id,$user_id){
    $this->user_id=self::clear($user_id);
    $this->id=self::clear($id);
    $sql="DELETE FROM `basket` where `id`='$this->id' and `id_user`='$this->user_id' ";
    $obj=self::connecting();
    $obj->query($sql);
  }
  public function getSelectProducts($id){
    $this->id=$id;
    $sql="Select * FROM `product` where `id`='$this->id'";
    $obj=self::connecting();
    $result=$obj->query($sql)->fetchAll();
    return $result;
  }
}
?>  