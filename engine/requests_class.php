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
}
?>