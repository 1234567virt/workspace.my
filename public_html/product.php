<!DOCTYPE html>
<?php require_once('../engine/init.php');
require_once('../engine/basket_funcs.php');
?>
<html lang="ru">
    <head>
    <?php
     $title="Каталог";
      $year=date("Y");
      $id=clear($link,$_GET['id']);
      $id=$_GET['id'];
      
  
    $result= getSelectProducts($link,$id);
       ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
       <script type="text/javascript">

/////////////////////
$("document").ready(function(){
 
    $('#info').load("comment_product.php",{id:<?php echo $id;?>}); 

    $("#send").click(function(){
     var dannie=$("form").serialize();
     if($('input[name="Aftor"]').val()==''){
        $('#error1').html("Заполните поле");
}
 else if($('textarea[name="Message"]').val()==''){
    $('#error2').html("Заполните поле");
}
else {
    
    $('#error1').html("");
    $('#error2').html("");
     $('#send').prop('disabled',true);
    $.ajax({
          url:'past_comment_catalog.php',
          method:'POST',
          cache:false,
          data:dannie,
          beforeSend:function(){setTimeout(function(){},10000)},
          success:function(data){
             $('#info').load("comment_product.php",{id:<?php echo $id; ?>}); 
             document.forms[0].reset();
             $('#send').prop('disabled',false);
        }
    });
    }
});
});

       </script>
        <meta charset="UTF-8">
        <title><?=$title;?></title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/product.css">
    </head>
    <body>
    <div class='container'>
    
       <?php while ($row = mysqli_fetch_array($result)){?>
      <?php $marka=$row['name'];
      
         require_once "../templates/product/product_detal.php";
            } ?>
           
     <div style="margin-top:100px" id='info'></div>
    
    <?php
     //   require_once "../templates/product/comment_product.php";
        require_once "../templates/product/form_product.php";
    ?>
    </div>
    <div>
</body>
  </html>