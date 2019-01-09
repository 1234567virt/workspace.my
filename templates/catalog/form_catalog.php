<form action="../templates/post_controller.php"  id="contact" method="post">
     <p>
        <label>Автор:<input type="text" placeholder="Автор" max='20' name="Aftor" required></label><br>
        <label>Текст:<textarea name='Message' placeholder='Отзыв' rows="7" cols="40" required></textarea>
       </label><br>
        <input type="hidden" name='id' value='<?php echo $id ?>'>
        <input type="submit" value="Отправить" class='submit_call'>
        <input type="reset" value="Сбросить" class="submit_call">
</form>