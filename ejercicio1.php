<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 1</title>
</head>
<body>
    <?php
    //funcion factorizar con recursividad
    function fact($numero){
        //caso base: fact de 1 = 1
        if($numero == 1){
            //factorial de 1 (caso base)
            $resultado = 1;
        }else{
            //hacer factorial del numero
            /*
            Ejemplo: fact(3) = 3* fact(2)
            fact(2) = 2 * fact(1)
            */
            $resultado = $numero * fact($numero-1);
        }
        $resultado;
        return $resultado;
    }
    $numeroFactorizar = 7;
    $resultadoFactorial = fact($numeroFactorizar);
    echo ("El factorial de $numeroFactorizar es: $resultadoFactorial </br>");
    ?>
</body>
</html>