<!DOCTYPE html>
<?php header('Content-type: text/html; charset=utf-8');?>
<html lang="ru">
    <head>
    <!--  <script src="http://code.jquery.com/jquery-latest.js"></script>
    
    <script>
      function getdetails(){
          var name = $('#name').val();
          var rno = $('#rno').val();
          $.ajax({
              type: "POST",
              url: "details.php",
              data: {fname:name, id:rno}
          }).done(function( result )
              {
                  $("#msg").html( " Address of Roll no " +rno +" is "+result );
              });
      } 
      </script> -->
    <?php 
    require_once('/opt/lampp/htdocs/workspace.my/engine/db_connect.php');
        $title="CMS";
        $h1="CMS";
        $year=date("Y");
       // $id=$_POST['id'];
        $sql="SELECT * FROM `product`";
     $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
     $num_rows = mysqli_num_rows( $result);
    ?>
    <link rel="stylesheet" href= "./css/style.css">
    <title><?php echo $title ?></title>
    <style>
                   table td{
                       border:1px solid red;
                       width:150px;
                       height:100px;
                   }
                   table td:first-child{
                       width:10px;
                       height:100px;
                   }
                   </style>
    </head>
    <body>
   
        <div class='container'>
             <div class="header">
             <img src='./img/logo.jpeg' alt='SonyValio' class='logo'>
                <ul>
               
               <?php  require_once('../templates/menu.php');?>    
                </ul>
                <hr>
            </div>
          
            <div class='content'>
                <h1>
               <?php echo $h1?>
                </h1>
              <div class='container'>
      
                   
                    <table>
             <?php
   while ($row = mysqli_fetch_array($result))
   {
         
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td><img src='".$row['src']."' width='120'></td>";
                       // echo "<input type='hidden' name='id' value=".$row['id'].">";
                        echo "<td><b>".$row['name']."</b></td>";
                       
              ?>
                           
                            <td>
                                <form method="post" action="/public_html/cms_operation.php">
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    <button type="submit">Удалить</button>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="/public_html/cms_operation.php">
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    <button type="submit">Редактировать</button>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="/public_html/cms_operation.php">
                                     <button type="submit">Создать</button>
                                </form>
                            </td>
                        </tr>
               <?php } ?>
   </table>
   </div>
<div class='footer'> 
                <hr>
                <strong>
                Все права защищены<sup>&copy;</sup> <?php echo $year; ?>
                </strong>
            </div>   
        </div>
    </body>
</html>