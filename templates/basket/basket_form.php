
 <form action ='./basket_cantroler.php'>
  <tr>
        <td><img src='<?=$row['src']?>' width="40%"/></td> 
        <td><?=$row['name']?></td> 
        <td align="center"><input type="number" name="count" value='<?=$row['count']?>'  placeholder='0' id='select'  /> </td>
        <input type="hidden" name="id" value='<?=$row['id_product']?>'  placeholder='0' id='select'  />
        <input type="hidden" name="name" value='<?=$row['name']?>'  placeholder='0' id='select'  />
        <td align="right"><?=$row['price']?> $</td> 
        
     
        <td align="right"><?=$row['price']?>$ </td>
       <td align="center">
        <button type="submit"  name='save' value='save'> <img src='img/basket.png'></button>
<button type="submit" name='delete' value='delete'><img src='img/rm.png'  style='width:17px;height:17px'></button>
    </td>
        </tr>
   </form>