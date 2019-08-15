<?php
require_once('../engine/connect.php'); 
 class CMS extends Connect{
    function __construct( ){
     
    }

    public function delet($id){
        $this->id=self::clear($id);
        $obj=self::connecting();
        $sql="DELETE FROM `product` where  id='$this->id'";
        $obj->query($sql);
       
    }
     public function insert($src,$name,$text,$number,$price){
        $this->src=self::clear($src);
        $this->name=self::clear($name);
        $this->text=self::clear($text);
        $this->number=self::clear($number);
        $this->price=self::clear($price);
       $sql= "INSERT INTO `product` (`src`, `name`, `text`, `count`, `number`, `price`) VALUES ('$this->src','$this->name','$this->text','0','$this->number','$this->price')";
        $obj=self::connecting();
        $obj->query($sql);

     }
     public function update($src,$name,$text,$number,$price){
        $this->src=self::clear($src);
        $this->name=self::clear($name);
        $this->text=self::clear($text);
        $this->number=self::clear($number);
        $this->price=self::clear($price);
         $sql="INSERT INTO `product` (`src`, `name`, `text`, `count`, `number`, `price`)
         VALUES ('$src','$name','$text','0','$number','$price')";
     }
    function cmsCatalogProducts(){
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
 }

?>