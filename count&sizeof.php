<?php
//// count and size of function

$food =array('orange','apple','bnanna','grapes','gava');

// echo count($food);
// echo sizeOf($food);

// $food=array(
//     'fruits'=>array('orange','apple','bnanna'),
//     'veggie'=>array('carrot','collard','pea'),
// );

/// for multidemensional array
// count($food['fruits'],1)

// $len= count($food);
// for($i=0; $i < $len; $i++){
//     echo $food[$i]."<br>";
// }


/// another function for counting the  value of array variable
/// if we want to know th duplicate number of the array than it is usefull
echo "<pre>";
print_r(array_count_values($food)) ;
echo "</pre>";

?>