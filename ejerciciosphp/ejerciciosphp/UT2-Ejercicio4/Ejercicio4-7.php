<?php

$array1 = range(1, 100, 5);
$array2 = range(2, 20, 2);

$array3 = array_merge($array1,$array2);

rsort($array3);

echo '<table>';

for ($i = 0; $i < count($array3); $i++) {
    
    echo'<tr>
            <td>'.$i.'</td>
            <td>'.$array3[$i].'</td>
         </tr>';
}
?>