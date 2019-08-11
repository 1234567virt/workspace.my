<?php
require_once('../engine/connect.php');
require_once('../engine/init.php');
 class Requests extends Connect {
    public function __construct () {
     
    }
    function getCatalogProducts(){
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
    // public function getUserEmail($login){
    //     $this->login=self::clear($login);
    //     $sql="Select * from `user` where `user_login`='$this->login' limit 1";
    //     $obj=self::connecting();
    //     $result=$obj->query($sql)->fetch();
    //     return $result;
      
    //   }
  }

 
 ?>