
<?php  $product_select= getRequestsProduct($link); ?>
<form style ="margin-top:25px;" action="../public_html/shoppingcart.php" method="get">
            <label>Продукт:</label> <select name="id" style="width:125px;height:40px">
            <option></option>
            <?php foreach($product_select as $key=>$val){
            echo "<option value=".$val['id'].">".$val['name']."</option>";
       
            }
         ?>
           </select>
            <label>Количество:<input type="number" placeholder="Количество" id="select" style="margin-left:200px;width:85px" name="count" required></label>
          
            <input type="submit" class='submit_call' value="Зарезирвировать"></p>
         </form> 