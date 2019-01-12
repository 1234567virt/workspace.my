<?php
 require_once '../engine/init.php';
 //$id=(int)$_GET['id'];
   $product= getRequestsProduct($link);
   ?>
   <div style="margin-left:100px">
   <?php
  foreach($product as $key=>$val){?>
  <div class='gal'>
    <h4 class='name'><a href='product.php?id=<?=$val['id'] ?>'><?=$val['name']?></a></h4>
    <a href='product.php?id="<?=$val['id']?>"' target='_blank'>
    <img src='<?=$val['src']?>' width='40%' class='catalog' ></a>
    <h4 class="price" ><?=$val['price']?>$</h4>
    <a href="basket_cantroler.php?id=<?=$val['id']?>&count=1"><input type='button' class='basket' value="Корзина"></a>
    <a href='product.php?id="<?=$val['id']?>"'><input type='button' class='basket'value="Подробней"></a>
</div>
<?php }  ?>
</div>