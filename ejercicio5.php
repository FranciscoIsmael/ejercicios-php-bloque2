<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericicio 5</title>
</head>
<body>

    <?php

    $usuarios=array(
        'IL2AR2_01' => array ('nombre' => "Alfons, Pere", 'email' => "pere- -alfons@gmail.com", 'dni' => "A74212011A"),
        'IL2AR2_02' => array ('nombre' => "Ruz, Pepe", 'email' => "pepe.ruz@gmail.com", 'dni' => "7458258"),
        'IL2AR2_03' => array ('nombre' => "Soler, Alberto", 'email' => "alberto13@hotmail.com", 'dni' => "A-1243364-A")
    );

    //esta funcion retorna true si es un correo y false si no lo es
    function checkMail($mail){
        
        $mailRegExp = "/@+.+(\.es|\.com)/";
        if(preg_match($mailRegExp, $mail["email"])){
            return true;
        }else{
            return false;
        }

    }

    //si el dni es correcto retorna true, si es falso retorna false
    function checkDni($dni){
        // comprobar dni
        if(substr($dni,0,8) == 8){
            $resto = $dni % 23;
            $numeros = substr($dni,0,8);
            $letra;
            switch($resto){
                case 0:
                    $letra = 'T';
                    break;
                case 1:
                    $letra = 'R';
                    break;
                case 2: 
                    $letra = 'W';
                    break;
                case 3:
                    $letra = 'A';
                    break;
                case 4:
                    $letra = 'G';
                    break;
                case 5:
                    $letra = 'M';
                    break;
                case 6:
                    $letra = 'Y';
                    break;
                case 7:
                    $letra = 'F';
                    break;
                case 8:
                    $letra = 'P';
                    break;
                case 9:
                    $letra = 'D';
                    break;
                case 10:
                    $letra = 'X';
                    break;
                case 11:
                    $letra = 'B';
                    break;
                case 12:
                    $letra = 'N';
                    break;
                case 13:
                    $letra = 'J';
                    break;
                case 14:
                    $letra = 'Z';
                    break;
                case 15:
                    $letra = 'S';
                    break;
                case 16:
                    $letra = 'Q';
                    break;
                case 17:
                    $letra = 'V';
                    break;
                case 18: 
                    $letra = 'H';
                    break;
                case 19:
                    $letra = 'L';
                    break;
                case 20:
                    $letra = 'C';
                    break;
                case 21:
                    $letra = 'K';
                    break;
                case 22:
                    $letra = 'E';
                    break;

            }
            $dniTest = $numeros.$letra;
            if($dniTest == $dni){
                return true;
            }else{
                return false;
            }
        }
        
    }

    // comprobar email
    $arrayMail = array_map("checkMail",$usuarios);
    $contadorEmail = 1;
    $inicioClave = 'IL2AR2_0';
    foreach($arrayMail as $aM){
        if(!$aM){
            echo "Error en el email: ";
            $clave = $inicioClave.$contadorEmail;
            echo($usuarios[$clave]['email']." de la persona ".$usuarios[$clave]['nombre']."</br>");
        }
        $contadorEmail++;
    }

    // comprobar dni
    $arrayDni = array_map("checkDni",$usuarios);
    $contadorDni = 1;
    foreach($arrayDni as $aD){
        if(!$aD){
            echo "Error en el dni: ";
             $clave = $inicioClave.$contadorDni;
            echo ($usuarios[$clave]['dni']." de la persona ".$usuarios[$clave]['nombre']."</br>");
        }
        $contadorDni++;
    }
    

    ?>

</body>
</html>