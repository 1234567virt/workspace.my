<?php
 require_once '../engine/init.php';
 $obj=new Requests();
   $product=$obj-> getCatalogProducts();
   ?>
   <div style="margin-left:100px">
<style>
.basket:hover{
  color:white;
  text-decoration:none;
  width:80px;
  height:20px;
  background:green;
  box-shadow: 3px 15px 16px rgba(9,9,9,.5);
  border:none;
}
</style>
   <?php
  foreach($product as $key=>$val){?>
  <div class='gal'>
    <h4 class='name'><a href='product.php?id=<?=$val['id'] ?>'><?=$val['name']?></a></h4>
    <a href='product.php?id="<?=$val['id']?>"' target='_blank'>
    <img src='<?=$val['src']?>' width='40%' class='catalog' ></a>
    <h4 class="price" ><?=$val['price']?>$</h4>
    <?php if($val['number']>0){?>
    <a href="basket_cantroler.php?id=<?=$val['id']?>&count=1"><input type='button' class='basket' value="Корзина" ></a>
    <?php 
    }
    else{
      ?>
      <a href="basket_cantroler.php?id=<?=$val['id']?>&count=1"><input type='button' class='basket' value="Отсутствует" 
      disabled style="color:red; width:75px;
    height:20px; background:white;box-shadow: 3px 5px 16px rgba(9,9,6,.5);border:1px"></a> 
    <?php } ?>
    <a href='product.php?id="<?=$val['id']?>"'><input type='button' class='basket'value="Подробней" ></a>
</div>
<?php }  ?>
</div>