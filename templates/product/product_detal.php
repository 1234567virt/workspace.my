<img src='<?=$row['src']?>' width='600'  id='img'>
          <?php counts($row['count'],$id,$link,"product");?>
            <div id='title' ><?=$row['name']?></div>
            <div id='long_text' id=''><span id='title_text'> Описание:</span>:<?=$row['text']?></div>
            <div id='count'>
            <center>
            <h4><?=$row['count']?></h4>
            </center></div>
            