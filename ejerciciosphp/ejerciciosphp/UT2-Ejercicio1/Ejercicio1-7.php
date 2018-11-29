<?php
    $cont = 1;
    echo "<table border = '1'>";
    for ($i=65;$i<=75;$i++) {
        echo "
                <tr>
                    <td>" .chr($i)."</td>
                    <td>" .$cont. "</td>
                </tr>";
        $cont = $cont + 1;
    };
    echo "</table>";
?>