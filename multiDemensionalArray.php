<?php

///  MultiDemensional Array Or Nested Array
$emp=[
    [1,"Ishmam","Manager",5000],
    [2,"Ali","Salesman",2000],
    [3,"Khan","Computer Operator",12000],
    [4,"Mahota","Driver",5000],
     [4,"Ishmam ALi Khan","Driver",5000],
];

// echo $emp[0][0]." ";
// echo $emp[0][1]." ";
// echo $emp[0][2]." ";
// echo $emp[0][3]." ";

// echo "<br>";

// echo $emp[1][0]." ";
// echo $emp[1][1]." ";
// echo $emp[1][2]." ";
// echo $emp[1][3]." ";

// for($row = 0; $row<4; $row++){
//     for($col = 0; $col<4; $col++){
//     echo $emp[$row][$col]." ";
// }
// echo "<br>";
// }


//// For MultiDemensional Array We Can Also Use For Each LOOp
echo "<table border='2px slid black' cellpadding='5px' cellspacing='0' style='margin:0 auto;'>";
echo "<tr>
<th>Id</th>
<th>Name</th>
<th>Department</th>
<th>Salary</th>
</tr>";
forEach($emp as $v1){
    echo "<tr>";
    forEach($v1 as $v2){
        echo "<td>$v2</td>";
}
echo "</tr>";
}
echo "</table>";



// echo "<pre>";
//  print_r($emp);
//  echo "</pre>"

?>