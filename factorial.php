<?php
require 'funcion.php'
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/factorial.css">
        <title>Factorial del 1 al 10</title>
    </head>
    <body>
        <table>
            <tr>
                <td>Numero</td>
                <td>Factorial</td>
            </tr>
        <?php
            for($i=0;$i<=10;$i++){
                $array[$i]=calcularFactorial($i);
            }
            print_r($array);
            for($i=0;$i<count($array);$i++){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$array[$i]."</td>";
                echo "</tr>";
            }
            //Este es el for each para visualizar el array
            /*foreach ($array as $i=>$valor){
                echo $i." ".$valor."<br/>";
            }*/ 
        ?>
        </table>
    </body>
</html> 