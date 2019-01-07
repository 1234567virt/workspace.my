<?php
  include('simple_html_dom.php');

    
   function obr($i) {
     $html=file_get_html('https://www.litmir.me/br/?b=132&p='.$i);
       foreach( $html->find('div[class=page_text]') as $val){
     
        $val=strip_tags($val,'<div> <p>');
 
echo $val;   
echo "<hr>";     
}
       $html->clear();
        unset($html);
    if($i<10){
        $i++;
obr($i);
    } 

    
}
obr(0);
 
?>