<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Закрыть" class="close">X</a>
        <form method="post" id='formup' enctype="multipart/form-data">
            <ul>
                <li><label>Название</label></li>
                <li> <input type="text" placeholder="Название" value="<?= $val['name']?>" name="name" required /></li>
                <li><label>Количество</label></li>
                <li> <input type="number" placeholder="Количество" value="<?= $val['number']?>" name="number"
                        required /></li>
                <li><label>Цена</label></li>
                <li> <input type="number" placeholder="Цена" value="<?= $val['price']?>" name="price" required />
                    <input type="hidden" value="<?=$val['id']?>" name="id" /></li>
                <input type="hidden" value="300000" name="MAX_FILE_SIZE" /></li>
                <li><label>Описание</label></li>
                <li> <textarea name="text" cols='29' rows='15' placeholder="Описание"><?=$val['text']?></textarea>
                </li>
            </ul>
            <input name="filename" type="file" /><br>
            <input type='button' name="ok" value='update' />
        </form>
        <br>
    </div>
</div>