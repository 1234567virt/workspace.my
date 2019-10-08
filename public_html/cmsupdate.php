<?php
 require_once '../engine/init.php';
 $obj=new Basket();
 $result=$obj->getSelectProduct($_POST['ids']);

?>
<div>Б<?php //Модальное окно можно переделать?>
    <a href="#close" title="Закрыть" class="close">X</a>
    
    <form method="post" id='formup' action='../controller/action.php' enctype="multipart/form-data">
    <?php foreach($result as $key=>$val){ ?>
        <ul>
            <li><label>Название</label></li>
            <li> <input type="text" placeholder="Название" value="<?= $val['name']?>" name="nameupdate" required /></li>
            <li><label>Количество</label></li>
            <li> <input type="number" placeholder="Количество" value="<?= $val['count']?>" name="countupdate"
                    required /></li>
            <li><label>Цена</label></li>
            <li> <input type="number" placeholder="Цена" value="<?= $val['price']?>" name="priceupdate" required /></li>
            <li><label>Счетчик</label></li>
            <li> <input type="text" placeholder="Счетчик" value="<?= $val['number']?>" name="numberupdate" required />
            </li>
            <input type="hidden" value="<?=$val['id']?>" name="idupdate" /></li>
            <input type="hidden" value="update" name="action" /></li>
            <input type="hidden" value="300000" name="MAX_FILE_SIZE" /></li>
            <li><label>Описание</label></li>
            <li> <textarea name="textupdate" cols='29' rows='15' placeholder="Описание"
                    required><?=$val['text']?></textarea>
            </li>
        </ul>
        <input name="file" type="file" onchange="LoadImg('#formup','errorupdate','#okupdate')" value="<?=$val['src']?>" /><span id='errorupdate'></span><!--Вывод ошибки--><br>
        <input type='submit' name="okupate" id='okupdate' value='Изменить' />
        <? }
            ?>
    </form>
    
    <br>
</div>