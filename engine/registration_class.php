<?php require_once('../engine/connect.php');
class Registration extends Connect {

    public function regis($login,$password,$name,$call){
           $this->login=self::clear($login);
           $this->password=self::clear($password);
           $this->name=self::clear($name);
           $this->call=self::clear($call);
           $this->password=password_hash ($this->password, PASSWORD_BCRYPT);
           $sql="INSERT INTO `user`(`role`, `user_name`, `user_login`, `user_password`, `u_call`) VALUES
        ('user','$this->name','$this->login','$this->password','$this->call')";
           $obj=self::connecting();
           $obj->query($sql);
     }

     public function getUserEmail($login){
        $this->login=self::clear($login);
        $sql="Select * from `user` where `user_login`='$this->login' limit 1";
        $obj=self::connecting();
        if($obj->query("select Count(*) from `user` where`user_login`='$this->login'")->fetchColumn()===0){
             return false;
        }
         else{
            $result=$obj->query($sql)->fetch();
            return $result;
        }
    }
    
      function getUserId($email){
        $this->id=self::clear($email);
        $sql="Select * from `user` where `id_user`='$this->id'";
        $obj=self::connecting();
        if($obj->query("select count(*) from `user` where  `id_user`='$this->id'")->fetchColumn()===0){
            return false;
        }
        else{
               $result=$obj->query($sql)->fetch();
               return $result;
        }
      }


    }   
?>