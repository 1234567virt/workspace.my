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
    $sql="DELETE FROM `basket` where `id_product`='$this->id' and `id_user`='$this->user_id' ";
    $obj=self::connecting();
    $obj->query($sql);

  }
 
  public function getSelectProduct($id){
    $this->id=$id;
    $sql="SELECT * FROM `product` where `id`=$this->id";
    $obj=self::connecting();
    if($obj->query("SELECT COUNT(*) FROM `product` where `id`=$this->id")->fetchColumn()===0){
      return false;
    }
    else{
      $result=$obj->query($sql)->fetchAll();
      return $result;
    }
  }

  public function update_basket($id_user,$id_product,$count){
    $this->user_id=$id_user;
    $this->id_product=$id_product;
    $this->count=$count;
     $sql="UPDATE `basket` SET  `count`=$this->count where `id_product`='$this->id_product' and id_user='$this->user_id'";
     $obj=self::connecting();
     $obj->query($sql);                
  }

 public function reiting($id_product){
    $this->id_product=$id_product;
    $sql="UPDATE `product` SET `number`=1+`number` WHERE `id`=$this->id_product";
    $obj=self::connecting();
    $obj->query($sql);  
   }

   public function basket_catalog($user_id){
     $this->id_user=self::clear($user_id);
     $obj=self::connecting();
     $sql="select product.src as `src`,basket.* 
     ,product.price as `price`,product.text as `text`,
     `product`.name, `basket`.count * `product`.price as `result`
      from `basket` left join
      `product` on `product`.id=`basket`.id_product where `basket`.id_user='$this->id_user'";
      if($obj->query("select COUNT(*) from `basket` left join `product` on `product`.id=`basket`.id_product where `basket`.id_user='$this->id_user'")->fetchColumn()===0){
        return false;
      }
      else{
         $result=$obj->query($sql)->fetchAll(); 
         return $result;
      }
  }
  public function basket_cantroler1($count,$id_product){
    $this->id=self::clear($id_product);
    $this->countx=self::clear($count);
    $obj=self::connecting();
    $sql="select * from `product` where `count`>=$this->countx and `id`=$this->id";
     if($obj->query("select COUNT(*) from `product`  where `count`>=$this->countx and `id`=$this->id")->fetchColumn()===0){
       return 0 ;
     }
       else{
      $result=$obj->query($sql)->fetchAll(); 
      return $result;
     }
  }

  public function basket_cantroler2($id_product,$id_user){
    $this->idproduct=$id_product;
    $this->iduser=$id_user;
    $obj=self::connecting();
    $sql="select COUNT(*) from `basket`  where `id_product`=$this->idproduct and `id_user`=$this->iduser";
  $result=$obj->query($sql)->fetchColumn();
      return $result;
     }
     
  public function basket_count_itog($id_user){
    $this->iduser=$id_user;
    $obj=self::connecting();
    $sql="select SUM(basket.count) as `count` , SUM(`basket`.count * product.price) as `sum` from `basket` left join 
      `product` on `basket`.id_product=`product`.id where `basket`.id_user=$this->iduser";
    if($obj->query("select COUNT(*) from `basket`  where id_user=$this->iduser")->fetchColumn()===0){
      return false;
    }
    else{
      $result=$obj->query($sql)->fetchAll();
      return $result;
    }  
}
  function result_basket($id_user){
    $this->id=$id_user;
    $obj=self::connecting();
    $sql="UPDATE product INNER JOIN basket ON product.`id` =basket.`id_product` SET product.`count` = product.`count` - basket.`count` WHERE basket.`id_user` = $id_user";
    $sql2=" DELETE from `basket` WHERE basket.`id_user` = $id_user";
    $obj->query($sql);
    $obj->query($sql2);
    header("Location:../public_html/cms_catalog.php");
  }
}
?>  