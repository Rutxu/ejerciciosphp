<?php
    function tabla($cad1,$cad2,$cad3,$cad4){
        return "<table border='1'>
                    <tr>
                        <td>" .$cad1. "</td>
                    </tr>
                    <tr>
                        <td>" .$cad2. "</td>
                    </tr>
                    <tr>
                        <td>" .$cad3. "</td>
                    </tr>
                    <tr>
                    <td>" .$cad4. "</td>
                    </tr>
                </table>";
    }

    echo tabla("Hola","Buenos","Dias","Tengas");
?>