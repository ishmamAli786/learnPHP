<?php
$a=["Ishmam","Ali","Khan",'55'];
$b=["Mahota"];
array_splice($a,3,1,$b);


echo "<pre>";
print_r($a);
echo "</pre>";
?>