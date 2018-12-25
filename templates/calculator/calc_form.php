<div id="contact_form">
      
      <form method="post" id="formH" action="<?="calc.php";?>">
          <input type="number" placeholder="Значение 1" value="<?=$arg1;?>" name="numberTwo" required class="required input_field" />
              <select name="hero" id="select" >
                  <option disabled></option>
                  <option value="+">+</option>
                  <option  value="-">-</option>
                  <option  value="*">*</option>
                  <option  value="/">/</option>
              </select>
         <input type="number" placeholder="Значение 2" value="<?=$arg1;?>" name="numberOne" required class="validate-email required input_field" />
  <br>
         <input type="submit" class="submit_call" name="submit" value="Расчитать" />
  <br>