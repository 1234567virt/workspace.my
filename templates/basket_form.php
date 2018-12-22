
<form style ="margin-top:25px;" action="../templates/basket_obr.php" method="post">
            <label>Продукт: <select name="product" style="width:125px;height:40px"></label>
            <option></option>
            <?php foreach($product as $key=>$val){
            echo "<option>".$val['name']."</option>";   
            }
         ?>
            <label>Количество:<input type="number" placeholder="Количество" id="select" style="margin-left:200px;width:85px" name="count" required></label>
            </select>
            <input type="submit" class='submit_call' value="Зарезирвировать"></p>
         </form> 