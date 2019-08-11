<?php
require_once '../engine/init.php';
  $basket=new Basket();
   $result=$basket->basket_catalog($_SESSION['user_id']); 
?>
         <table width="680px" cellspacing="0" cellpadding="5">
                       	  <tr bgcolor="#ddd">
                        	<th width="220" align="left">Изображение</th> 
                        	<th width="180" align="left">Название </th> 
                       	  	<th width="100" align="center">Количество </th> 
                        	<th width="60" align="right">Цена </th> 
                        	<th width="60" align="right" id="filter">Всего </th> 
                        	<th width="90"> </th>
                        </tr>
                        <form>
               <?php
               
   foreach ($result as $key=>$row)
    {
  ?>
   <tr>
        <td><img src='<?=$row['src']?>' width="40%"/></td> 
        <td><?=$row['name']?></td> 
        <td align="center"><input type="number" name="count" onchange="savebasket(<?=$row['id_product']?>,this.value)" value='<?=$row['count']?>'  min='0' max='15'
placeholder='0' id='select'  /> </td>
       
        <input type="hidden" name="name" value='<?=$row['name']?>' readonly placeholder='0' id='select'  />
        <td align="right"><?=$row['price']?> $</td> 
        
     
        <td align="right" id='summa'><?=$row['result']?> </td>
       <td align="center">
     
<input type="button" id="d" name='delete' onclick="del(<?=$row['id_product']?>)" value='delete'><img src='img/rm.png'  style='width:17px;height:17px'>
    </td>
        </tr>
  
  <?php
  } 
?>
<tr>
<td>Сумма</td><td id='itog'></td>
</tr>
	</table>
  </form>                  	