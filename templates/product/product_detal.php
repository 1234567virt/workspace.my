<img src='<?php echo $val['src']?>' width='600'  id='img'>
          <?php  counts($val['count'],$id,$link,"product");?>
            <div id='title' ><?php echo $val['name']?></div>
            <div id='long_text' id=''><span id='title_text'> Описание:</span>:<?php echo $val['text']?></div>
            <div id='count'>
            <center>
            <h4><?php echo $val['count']?></h4>
            </center></div>
            