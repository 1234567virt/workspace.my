<?php
 require_once("../engine/connect.php"); 

class Comment extends Connect {
   function rewiev($Aftor,$Message){
      $obj=self::connecting();
      $this->Aftor=self::clear($Aftor);
      $this->Message=self::clear($Message);
      $date=date('Y-m-d');
      $sql="INSERT INTO  `otziv` (`Aftor`, `text`, `date`) VALUES
      ('$this->Aftor','$this->Message','$this->date')";
      $obj->query($sql);
    }
   function review_nout($Aftor,$Message,$id,$marka){
      $obj=self::connecting();
      $this->Aftor=self::clear($Aftor);
      $this->Message=self::clear($Message);
      $this->id=self::clear($id);
      $this->marka=self::clear($marka);
      $sql= "INSERT INTO `otziv_nout` (`id`, `name`, `Aftor`, `text`) VALUES 
      ('$this->id','$this->marka','$this->Aftor','$this->message')";   
      $obj->query($sql);
   }
}
?>