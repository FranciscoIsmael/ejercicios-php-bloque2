<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    
    <?php

    function getDirectory($ruta){
        if ($directorio = opendir($ruta)) {
            while (false !== ($entrada = readdir($directorio))) {
                if ($entrada != "." && $entrada != "..") {
                    //funciona como una pila de returns que puedes iterar
                    yield "$entrada\n";
                }
            }
            closedir($directorio);
        }
    }

    $ruta = ".";

    $carpetas = getDirectory($ruta);

    echo "<ul>";
    foreach ($carpetas as $carpeta){
    echo ("<li>".$carpeta."</li>");
    }
    echo "</ul>";

    ?>

</body>
</html>