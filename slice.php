<?php
$a=["Ishmam","Ali","Khan",'55',"Mahota"];
$color=['a'=>"red",'b'=>"green",'42'=>"blue",'d'=>"yellow"];

/// for finding actual index number of array add true in function by default here is false value
$new_array=array_slice($color,1,3,true);
echo "<pre>";
print_r($new_array);
echo "</pre>";
?>