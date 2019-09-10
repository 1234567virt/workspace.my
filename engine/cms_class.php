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
     public function insert($src,$name,$text,$count,$price){
        $this->src=self::clear($src);
        $this->name=self::clear($name);
        $this->text=self::clear($text);
        $this->count=self::clear($count);
        $this->price=self::clear($price);
       $sql= "INSERT INTO `product` (`src`, `name`, `text`, `count`, `number`, `price`) VALUES ('$this->src','$this->name','$this->text','$this->count','0','$this->price')";
        $obj=self::connecting();
        $obj->query($sql);

     }
     public function update($id,$count,$src,$name,$text,$number,$price){
        $this->id=self::clear($id);
        $this->src=self::clear($src);
        $this->count=self::clear($count);
        $this->name=self::clear($name);
        $this->text=self::clear($text);
        $this->number=self::clear($number);
        $this->price=self::clear($price);
         $sql=" UPDATE `product` SET  `src`='$src', `name`='$name' ,`count`='$count',`text`='$text',`number`=$number,`price`=$price WHERE id=$id ";
         $obj=self::connecting();
         $obj->query($sql);
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