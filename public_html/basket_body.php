<?php
require_once '../engine/init.php';
$sql1="select product.src as `src`,basket.* 
,product.price as `price`,product.text as `text`,
`product`.name, `basket`.count * `product`.price as `result`
 from `basket` left join
 `product` on `product`.id=`basket`.id_product where `basket`.id_user=".$_SESSION['user_id']."";
$result = mysqli_query($link, $sql1) or die("Ошибка " . mysqli_error($link)); 
    
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
               
    while ($row = mysqli_fetch_array($result))
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