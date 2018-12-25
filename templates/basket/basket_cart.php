<?php 
//$result=getSelectProduct($link,$arg1);
while ($row = mysqli_fetch_array($result)){?>
                  <tr>
                           <td><img src='<?=$row['src']?>' width="40%"/></td> 
                           <td><?=$row['name']?></td> 
                           <td align="center"><input type="number" value="<?=$arg2?>" id='select'  /> </td>
                           <td align="right"><?=$row['price']?> $</td> 
                           <td align="right"><?=$row['price']?>$ </td>
                           <td align="center"> <a href="#"><i class="fa fa-lg fa-shopping-basket"></i>
                           <img src='img/rm.png' style='width:17px;height:17px'> </td>
                  </tr>
<?php } ?>