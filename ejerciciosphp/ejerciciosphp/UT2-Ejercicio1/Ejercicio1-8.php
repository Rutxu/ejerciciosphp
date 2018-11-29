<?php
    $num = 8;

    echo "<table border = '1' style = 'margin:0 auto'>";
    for ($i=0;$i<=10;$i++) {
        $res = $num * $i;
        echo "
                <tr>
                    <td>" .$num."  x ".$i."</td>
                    <td>" .$res. "</td>
                </tr>";
    };
    echo "</table>";
?>