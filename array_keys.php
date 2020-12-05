<?php

// $color=["red","green","blue","yellow"];
$color=['first'=>"red",'second'=>"green",'third'=>"blue",'fourth'=>"yellow"];
// $newArray=array_keys($color);
// $newArray=array_key_first($color);
// $newArray=array_key_last($color);
// $newArray=array_key_exists('third',$color);
$newArray=key_exists('first',$color);
if($newArray){
    echo "Find Successfully";
}else{
    echo "Can't Find";
}
// echo "<pre>";
// print_r($newArray );
// echo "</pre>";
?>