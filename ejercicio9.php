<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

    <?php

    function cambiarPosicion($array){
        $primer = $array[0];
        $ultimo = $array[sizeof($array)-1];
        $array[0] = $ultimo;
        $array[sizeof($array)-1] = $primer;
        return $array;
    }


    $array = [];
    for ($i = 0 ; $i < 10; $i++){
        $array[$i]=rand(1,100);
    }
    $arrayOrdenado = $array;
    sort($arrayOrdenado);

    $arrayCambiado = cambiarPosicion($arrayOrdenado);


    echo("<table>");
    echo "<th>array</th><th>array ordenado</th><th>array con la primera y la ultima posicion intercambiada</th>";
    
    for($i=0;$i< sizeof($array);$i++){
        echo "<tr>";
        echo "<td>".$array[$i]."</td>";
        echo "<td>".$arrayOrdenado[$i]."</td>";
        echo "<td>".$arrayCambiado[$i]."</td>";
        echo "</tr>";
        
    }
    echo("</table>");
    ?>
</body>
</html>