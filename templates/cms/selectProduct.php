<?php

            if(isset($_GET['id'])){
               $id=$_GET['id'];
               $sql="SELECT * FROM `product` WHERE `id`=$id";
               echo $sql;
                 $result = mysqli_query($link, $sql); 
                while ($row = mysqli_fetch_array($result))
                {
                        $name=$row['name'];
                        $price=$row['price'];
                        $number=$row['number'];
                        $text=$row['text'];
                        $src=$row['src'];
                }
                $h1="Редактировать";
            }
            else{
                $h1="Создание";
                $name='';
                $price='';
                $number='';
                $text='';
                $src='';
            }
            ?>