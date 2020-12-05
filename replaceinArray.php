<?php
// $fruit =['orange','banana','a'=>'apple','grapes'];
// $vege=['a'=>'carrot','b'=>'pea'];
// $newArray=array_replace($fruit,$vege);

/// multidemensional Array
/// in multidemnsional Array Function array_replace_recursive function is used
$array1=array("a"=>array("red"),"b"=>array("green","pink"));
$array2=array("a"=>array("yellow"),"b"=>array("black"));
$newArray=array_replace_recursive($array1,$array2);


echo "<pre>";
print_r($newArray);
echo "</pre>";
?>