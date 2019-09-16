<img src='<?php echo $val['src']?>' width='600' id='img'>
<?php  $product->reiting($_GET['id']);
          ?>
<div id='title'><?php echo $val['name']?></div>
<div id='long_text' id=''><span id='title_text'> Описание:</span>:<?php echo $val['text']?></div>
<div id='count'>
    <center>
        <h4><?php echo $val['number']?></h4>
    </center>
</div>