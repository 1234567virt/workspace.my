<?php
 require_once("../engine/connect.php"); 

class Comment extends Connect {
   function rewiev($Aftor,$Message){
      $obj=self::connecting();
      $this->Aftor=self::clear($Aftor);
      $this->Message=self::clear($Message);
      $this->date=date('Y-m-d');
      $sql="INSERT INTO  `otziv` (`Aftor`, `text`, `date`) VALUES
      ('$this->Aftor','$this->Message','$this->date')";
      $obj->query($sql);
    }
   function review_nout($Aftor,$Message,$marka){
      $obj=self::connecting();
      $this->Aftor=self::clear($Aftor);
      $this->Message=self::clear($Message);
      $this->marka=self::clear($marka);
      $sql= "INSERT INTO `otziv_nout` ( `name`, `Aftor`, `text`) VALUES 
      ('$this->marka','$this->Aftor','$this->Message')";   
      $obj->query($sql);
   }
   function Comments_catalog_old(){
      $sql="SELECT * FROM `otziv`";
      $obj=self::connecting();
      $massiv=$obj->query($sql)->fetchAll();
       return $massiv;
   }
   function Comments_product($id){
      $this->id=$id;
      $sql="SELECT `otziv_nout`.* FROM `product` left join
      `otziv_nout` on `otziv_nout`.`name`=`product`.`name` where `product`.id=$this->id";
      $obj=self::connecting();
      $result=$obj->query($sql)->fetchAll();
      
      return $result;

   }

   function Comments_catalog($value){
      $obj=self::connecting();
      $this->value=self::clear($value);
      $sql="SELECT * FROM `otziv` limit $this->value , 5";
       if($obj->query("SELECT COUNT(*) FROM `otziv` limit $this->value , 5 ")->fetchColumn()===0)
       {
           return false;
       }
      else
      {
         $result=$obj->query($sql)->fetchAll();
         return $result;
      }
   }
}

?>