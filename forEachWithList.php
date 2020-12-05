<?php
//// Multidemensional Array With List

// $emp=[
//     [1,"Ishmam","Manager",1000],
//     [2,"Ali","Salesman",5000],
//     [3,"Khan","Computer Operator",2000],
//     [4,"Mahota","Driver",5000],
// ];

$emp=[
    ["id"=>1,"name"=>"Ishmam","designation"=>"Manager","salary"=>1000],
    ["id"=>2,"name"=>"Ali","designation"=>"Salesman","salary"=>5000],
    ["id"=>3,"name"=>"Khan","designation"=>"Computer Operator","salary"=>2000],
    ["id"=>4,"name"=>"Mahota","designation"=>"Driver","salary"=>5000],
    ["id"=>5,"name"=>"Ishmam ALi Khan","designation"=>"It Specalist","salary"=>3000],
];

echo "<table border='2px' cellpadding='5' cellspacing='0'>
<tr>
<th>Employee ID</th>
<th>Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>";
forEach($emp as list("id"=>$id,"name"=>$name,"designation"=>$designation,"salary"=>$salary)){
    echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary </td></tr>";
}
echo "</table>";
?>