<?php
$text = 'my friend good';
$find = 'd';
$count = 0;

for ($i = 0; $i <= strlen($text); $i++){
    if ($text[$i] == $find){
        $count++;
        echo "ki tu o vi tri thu :".$i. "<br> <br>";
    }
}echo "tong so lan xuat hien  ".$count;