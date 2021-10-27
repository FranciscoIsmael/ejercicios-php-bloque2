<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico 8</title>
</head>
<body>

    <?php
    
    
    // hacer una funcion para leer el txt con yield
    function readTxt($archivo){

        // con el while leemos TODAS las lienas del archivo
        while(($lineas = fgets($archivo)) !== false){
            $comando = (yield $lineas);
            if($comando == 'stop'){
                return ;
            }
        }
        
        
        

    };
    // sacar solo un numero de lineas concreto, en este caso 3
    $archivo = fopen("Lorem.txt","r");
    $cantidaLineas = 3;

    if($archivo !== false){
        $lineas = readTxt($archivo);
    
        foreach($lineas as $linea){
       

            if($cantidaLineas == -1){
                $lineas->send('stop');
            
            }
            echo $linea."</br>";

            $cantidaLineas--;
        }
    }

    


    
    ?>
    
</body>
</html>