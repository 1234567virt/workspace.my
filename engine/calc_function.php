<?php

class MathO {
    function clear($val){
        $value=htmlspecialchars(strip_tags($val));
        return $value;
    }
    function mathOperation($arg1, $arg2, $operation){
        $this->arg1=$this->clear($arg1);
        $this->arg2=$this->clear($arg2);
        $this->operation=$operation;
       
        switch ($this->operation){
            case '-':
               return $this->minus($this->arg1,$this->arg2);
            break;
            case '+':
               return $this->plus($this->arg1,$this->arg2);
            break;
            case "*":
               return $this->ymn($this->arg1,$this->arg2);
            break;
            case "/":
               return $this->del($this->arg1,$this->arg2);
            break;
        }
        
    }
    function plus ($p1,$p2){
        $this->p1=$this->clear($p1);
        $this->p2=$this->clear($p2);
        return $this->p1 + $this->p2;
    }
    
    function minus ($p1,$p2){
        $this->p1=$this->clear($p1);
        $this->p2=$this->clear($p2);
        return $this->p1 - $this->p2;
    }
    
    function del($p1,$p2){
        $this->p1=$this->clear($p1);
        $this->p2=$this->clear($p2);
        if($this->p1>0 && $this->p2>0){
        return $this->p1 / $this->p2;
        }
        else{
            return 'Ошибка';
        }
    }
    
    function ymn($p1,$p2){
    $this->p1=$this->clear($p1);
    $this->p2=$this->clear($p2);
    return $this->p1 * $this->p2;
    }
}
?>