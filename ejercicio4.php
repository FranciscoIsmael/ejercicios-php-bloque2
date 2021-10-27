<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
<?php

// funcion para obtener solo el nombre del navegador, solo funciona con algunos navegadores
function get_browser_name($user_agent){
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
        elseif (strpos($user_agent, 'Edge')) return 'Edge';
        elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
        elseif (strpos($user_agent, 'Safari')) return 'Safari';
        elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
        elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
    
        return 'Other';
}
//crear un archivo txt
//rellenarlo con fecha y hora, ip, idioma, navegador
//2019-03-08 11:41|::1|Chrome|ca,es-ES,es
date_default_timezone_set('Europe/Madrid ');
$fecha = date("Y-m-d H:i");
$ipv6 = $_SERVER['REMOTE_ADDR'];
$nombreNav = get_browser_name($_SERVER['HTTP_USER_AGENT']);
$idioma = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
$resultado = $fecha."|".$ipv6."|".$nombreNav."|".$idioma;

$archivoLog = fopen("log.txt","a");
fwrite($archivoLog,$resultado."\n");
fclose($archivoLog);
echo "Se ha escrito $resultado en el archivo log";

?>
</body>
</html>