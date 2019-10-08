<?php
 require_once '../engine/init.php';
 ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script type="text/javascript">
 function updateId(id){
$('#openModal').load('cmsupdate.php',{ ids:id });//Загрузка формы обновления товара
}
 </script>
 <?php
$sql=new CMS();
$result=$sql->cmsCatalogProducts();
?>
<style>
 	
#cmscatalog tr:nth-child(even) {
    background: #709FFF;
}

#cmscatalog tr:nth-child(even) td:nth-child(1) {
    border-radius: 10px 0 0 0;
}

#cmscatalog tr:nth-child(even) td:nth-child(7) {
    border-radius: 0 10px 0 0;
}

#cmscatalog tr td:nth-child(2) {
    font:
}
</style>
<table width="680px" id='cmscatalog' cellspacing="0" cellpadding="5"><?php  //блок ввыда данных cms?>
    <tr bgcolor="#ddd">
        <th width="220" align="left">Изображение</th>
        <th width="180" align="left">Название </th>
        <th width="100" align="center">Количество </th>
        <th width="60" align="right">Цена </th>
        <th width="60" align="right" style="padding-left:15px">Счетчик</th>
        <th width="90"> </th>
    </tr>
    <form method="GET">
        <?php   foreach($result as $key=>$val) { 
?>
        <tr>
            <td><img src='<?=$val['src']?>' style="margin-left:10px" width="40%" /></td>
            <td><?=$val['name']?></td>
            <td align="center"><?= $val['count']?></td>
            <td align="right"><?=$val['price']?> $</td>
            <input type="hidden" name="id" value="<?=$val['id']?>" id='select' />
            <td align="right"><?=$val['number']?> </td>
            <td align="center">
             
            <a href='#openModal' onclick="updateId('<?=$val['id']?>')"><img src='img/update.png' id='update'   style='width:18px;height:18px'> </a> 

                <img src='img/rm.png' id='delete' style='width:18px;height:18px' onclick="delet('<?=$val['id']?>')">
            </td>
        </tr>
        <?php 
} 
?>
</table>

</form>
<div id="openModal" class="modalDialog"></div><!--Ззагружаеться модальное окно-->
<?php ?>