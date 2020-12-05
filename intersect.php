<?php
//// InterSect Function Is USed To Find The Common Value
$color=['a'=>"red",'b'=>"green",'42'=>"blue",'d'=>"yellow"];
$color1=['a'=>"pink",'f'=>"black",'43'=>"blue",'d'=>"yellow"];
// $new_array=array_intersect($color,$color1);
// $new_array=array_intersect_key($color,$color1);
$new_array=array_intersect_assoc($color,$color1);

echo "<pre>";
print_r($new_array);
echo "</pre>";
?>