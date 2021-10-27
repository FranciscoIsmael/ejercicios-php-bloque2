<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico 2</title>
</head>
<body>
    <?php
    $array = array (6,7,3,8,2,9,2,20);
    usort($array, function($a,$b){
        return $a-$b;
    });
    foreach($array as $a){
        echo $a."\n";
    }
    
    ?>
</body>
</html>