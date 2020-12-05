<?php

$marks=array(
    "Ishmam"=>array("physics"=>85,"chemistry"=>89,"math"=>78),
    "Ali"=>array("physics"=>68,"chemistry"=>79,"math"=>73),
    "Khan"=>array("physics"=>62,"chemistry"=>92,"math"=>67),
);
// echo "<pre>";
// print_r($marks);
// echo "</pre>"


echo "<table border='2px' cellpadding='5' cellspacing='0'>";
echo "<tr>
<th>Student Name</th>
<th>physics</th>
<th>chemistry</th>
<th>math</th>
</tr>";
forEach($marks as $key=>$m1){
    echo "<tr><td>$key</td>";
    forEach($m1 as $m2){
        echo "<td>$m2</td>";
}
 echo "</tr>";
}
"</table>";
?>