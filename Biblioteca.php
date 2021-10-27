<?php
define("MENU_PRINCIPAL",1);
define("MENU_SECUNDARIO",2);
function generarCabecera($texto, $menu){
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '    <meta charset="UTF-8">';
    echo '    <meta http-equiv="X-UA-Compatible" content="IE=edge">';
    echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo "<title>$texto</title>";
    echo '</head>';
    echo '<body>';
   

    if($menu === 'MENU_PRINCIPAL'){
        //aqui el menu principal
        echo '<h2> Estos son los enlaces del menu principal</h2>';
        echo '</br>';
        echo '<a href = "https://www.php.net/downloads">Descargas php</a>';
        echo '</br>';
        echo '<a href = "https://www.php.net/docs.php">Documentracion php</a>';
    }else{
        //aqui el menu secundario
        echo '<h2> Estos son los enlaces del menu secundario</h2>';
        echo '</br>';
        echo '<a href = "https://www.php.net/get-involved">Get involved php</a>';
        echo '</br>';
        echo '<a href = "https://www.php.net/support">Help php</a>';
    }
}
function generarPie($footer){
    echo '<footer> FIN <?footer>';
    echo '</body>';
    echo '</html>';
}


