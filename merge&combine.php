<?php
$a=['a'=>"Ishmam",'b'=>"ALi",'c'=>"Khan"];
$b=["Mahota"];
$color=["red","green","blue"];
$newArray=array_merge($a,$b,$color);

echo "<pre>";
print_r($newArray);
echo "</pre>";
?>