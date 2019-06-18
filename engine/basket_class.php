<?php
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
  public function getSelectProduct($id){
    $this->id=$id;
    $sql="SELECT * FROM `product` where `id`=$this->id";
    $obj=self::connecting();
    $result=$obj->query($sql)->fetchAll();
    return $result;
  }
}
?>  