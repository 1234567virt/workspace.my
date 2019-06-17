<?php
require_once('../engine/connect.php'); 
// class Connect{
//     const HOST = 'localhost';
//     const  NAME = 'php1level5';
//     const  USER ='serj';
//      const PASS=22121987;
//     const  DRIVER='mysql';
//     public function connecting () {
//         return new PDO(self::DRIVER . ':host='. self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
//     }
//     function clear($val){
//         $value=htmlspecialchars(strip_tags($val));
//         return $value;
//     }
// }
///////////////////////
// function insert($link,$src,$name,$text,$number,$price){
// mysqli_query($link ,"INSERT INTO `product` (`src`, `name`, `text`, `count`, `number`, `price`)
//     VALUES ('$src','$name','$text','0','$number','$price')");
// }

// function update($link,$id,$src,$name,$text,$number,$price){
//     mysqli_query($link ,"UPDATE `product` SET `src`='$src',
//     `name`='$name',`text`='$text',`number`='$number',`price`='$price' WHERE `id`=$id");
//  }

// function delet($link,$id){
//     mysqli_query($link,"DELETE FROM `product` where  id='$id'");
//  } 
  /////////////////////
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

 }

?>