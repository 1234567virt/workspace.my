<?php
 require_once '../engine/init.php';
$sql="SELECT * FROM `product`";
$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
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
<?php   while ($row = mysqli_fetch_array($result)) { 
?>
<tr>
<td><img src='<?=$row['src']?>' width="40%"/></td> 
<td><?=$row['name']?></td> 
<td align="center"><?= $row['number']?></td>
<td align="right"><?=$row['price']?> $</td> 
<input type="hidden" name="id" value="<?=$row['id']?>" id='select'  />
<td align="right"><?=$row['count']?> </td>
<td align="center">
<button type="submit"  name='update' value='update' onclick="updat('<?=$row['id']?>')"> <img src='img/update.png'></button>
<input type="button"  name='delete' value='delete' onclick="delet('<?=$row['id']?>')"><img src='img/rm.png'  style='width:17px;height:17px'>
</td>
</tr>
<?php 
} 
?>
</table>
</form>	