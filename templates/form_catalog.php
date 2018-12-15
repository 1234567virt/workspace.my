<form action="../templates/post.php"  id="contact" method="post">
     <p>
        <label>Автор:<input type="text" placeholder="Автор" name="Aftor" required></label><br>
        <label>Текст:<textarea name='Message' placeholder='Отзыв' rows="10" cols="45" required></textarea>
       </label><br>
        <input type="hidden" name='id' value='<?php echo $id ?>'>
        <input type="submit" value="Отправить">
        <input type="reset" value="Сбросить">
</form>