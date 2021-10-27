<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>

    <?php
    // la linea de abajo ignora los warnings
    error_reporting(E_ERROR | E_PARSE);
    // iterar sobre un directorio
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
    $pattern = '/"|#|\$|%|&|\(|\)|\*|\+|,|-|\/|:|;|<|=|>|\?|@|\[|]|\|^|_|`|{|||}|~/';
    $ruta = '.';
    $carpetas = getDirectory($ruta);
    // var_dump($carpetas);
    // leer todos los archivos de ldirectorio
    foreach ($carpetas as $carpeta){
        echo '$carpeta ';
        var_dump($carpeta);
        echo "</br>";
        // esta line no funciona
        $archivos = fopen("/".$carpeta,'r');
        echo '$archivos ';
        var_dump($archivos);
        while(($linea = fgets($archivos)) != false){
            echo "aqui llega";
            if(preg_match_all($pattern, $archivos)){
                var_dump($linea);
                echo "caracter especial encontrado en: ".$carpeta."en la linea: ".$linea."</br>";
            }else{
                echo "no se ha encontrado ningun caracter especial";
            }
        }
        if (!feof($archivos)) {
            echo "Error: fallo inesperado de fgets()\n";
        }
        fclose($archivos);
        // si encuentra algun caracter especial escrito en un archivo mostrarlo por pantalla a que archivo pertenece
        // if(preg_match_all($pattern, $archivos)){
        //     // mostrar el caracter especial encontrado, en que linea se ha encontrado y en eque archivo
        //     // con explode pasarle todo el archivo en forma de string, dividirlo por \n y asi tengo un array de lineas
        //     // obtener linea del fichero con fget
        //     // echo "aqui llega";
        //     while(($linea = fgets($archivos)) !== false){
        //         echo "aqui llega";
        //         if(preg_match_all($pattern, $archivos)){
        //             var_dump($linea);
        //             echo "caracter especial encontrado en: ".$carpeta."en la linea: ".$linea."</br>";
        //         }else{
        //             echo "no se ha encontrado ningun caracter especial";
        //         }
        //     }

            
        // }
        // else{
        //     // echo "no se ha encontrado ningun caracter especial";
        // }
    }
    
    
    
    ?>
    
</body>
</html>