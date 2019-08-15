<?php
 require_once '../engine/init.php';
$sql=new CMS();
$result=$sql->cmsCatalogProducts();
?>
  
<table width="680px" cellspacing="0" cellpadding="5">
<tr bgcolor="#ddd">
    <th width="220" align="left">Изображение</th> 
    <th width="180" align="left">Название </th> 
      <th width="100" align="center">Количество </th> 
    <th width="60" align="right">Цена </th> 
    <th width="60" align="right">Счетчик</th> 
    <th width="90"> </th>
</tr>
<form  method="GET">  
<?php   foreach($result as $key=>$val) { 
?>
<tr>
<td><img src='<?=$val['src']?>' width="40%"/></td> 
<td><?=$val['name']?></td> 
<td align="center"><?= $val['number']?></td>
<td align="right"><?=$val['price']?> $</td> 
<input type="hidden" name="id" value="<?=$val['id']?>" id='select'  />
<td align="right"><?=$val['count']?> </td>
<td align="center">
<button type="submit"  name='update' value='update' onclick="updat('<?=$val['id']?>')"> <img src='img/update.png'></button>
<input type="button"  name='delete' value='delete' onclick="delet('<?=$val['id']?>')"><img src='img/rm.png'  style='width:17px;height:17px'>
</td>
</tr>
<?php 
} 
?>
</table>
</form>	