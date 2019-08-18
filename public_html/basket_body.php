<?php
require_once '../engine/init.php';

  $basket=new Basket();
   $result=$basket->basket_catalog($_SESSION['user_id']); 

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<form>
         <table id='ttt' width="680px" cellspacing="0" cellpadding="5">
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
       
        <input type="hidden" name="n" value='<?=$row['name']?>' readonly placeholder='0' id='select'  />
        <td align="right"><?=$row['price']?> $</td> 
        
     
        <td align="right" class='summa'><?=$row['result']?> $</td>
       <td align="center">
     
<input type="button" id="delete" name='delete' onclick="del(<?=$row['id_product']?>)" value='delete'><img src='img/rm.png'  style='width:17px;height:17px'>
    </td>
        </tr>
  
  <?php
  } 
?>
<tr>
<td colspan='2'>Сумма</td><td id='itog' align='center'  style='width:50px'><?=$itog[0]['count']?></td><td align='right' colspan='3' style='width:30%'> <?php print $itog[0]['sum']?> $</td>
</tr>
	</table>
  </form>                  	