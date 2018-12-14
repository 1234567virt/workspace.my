<form style ="margin-top:25px;" action="<?="calc.php";?>" method="post">
        <input type="number" placeholder="Значение 1" value="<?=$arg1;?>" name="numberOne" required>
        <input type="number" placeholder="Значение 2" value="<?=$arg2;?>" name="numberTwo" required>
    <p><select name="hero" required>
     <option disabled></option>
     <option value="+">+</option>
     <option  value="-">-</option>
     <option  value="*">*</option>
     <option  value="/">/</option>
    </select></p>
    <p><input type="submit" value="Отправить"></p>
   </form>
