
     <form action ='../templates/cms_controler.php' method="GET">
     <tr>
        <td><img src='<?=$row['src']?>' width="40%"/></td> 
        <td><?=$row['name']?></td> 
        <td align="center"><?= $row['number']?></td>
        <td align="right"><?=$row['price']?> $</td> 
        <input type="hidden" name="id" value="<?=$row['id']?>" id='select'  />
        <td align="right"><?=$row['count']?> </td>
        <td align="center">
        <button type="submit"  name='update' value='update'> <img src='img/update.png'></button>
        <button type="submit" name='delete' value='delete'><img src='img/rm.png'  style='width:17px;height:17px'></button>
        <button type="submit"  name='insert' value='insert'> <img src='img/basket.png'></button>
        </td>
    </tr>
</form>
