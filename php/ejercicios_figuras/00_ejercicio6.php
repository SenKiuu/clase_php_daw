<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        div{
            background-color: grey;
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 2px solid black;
            text-align: center;
            line-height: 50px;

        }
        
    .dot {
    height: 20px;
    width: 20px;
    background-color: red;
    border-radius: 100%;
    display: inline-block;
    }
   

    </style>
</head>
<body>
        <?php
            $dado = rand(1, 6);

            echo "<br><br><img src ='../dado/cara{$dado}.webp'><br><br>";
            echo "numero del dado chivatoo ";
            echo  $dado;
        ?>
<br>
     
       
       <div>
        1   <?php 
        if ($dado == 1)
        echo "<span class='dot'></span>";
            ?>
        </div>

        <div>
        2<?php 
        if ($dado == 2)
        echo "<span class='dot'></span>";
            ?>
        </div>
        
        <div>
        3<?php 
        if ($dado == 3)
        echo "<span class='dot'></span>";
            ?>
        </div>

        <div>
        4<?php 
        if ($dado == 4)
        echo "<span class='dot'></span>";
            ?>
        </div>
        <div>
        5<?php 
        if ($dado == 5)
        echo "<span class='dot'></span>";
            ?>
        </div>
        <div>
        6<?php 
        if ($dado == 6)
        echo "<span class='dot'></span>";
            ?>
        </div>
</body>
</html>