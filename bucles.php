<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BUCLES</h1>
    <h2>Listado de números del 1 al 10</h2>
    <?php
    $array = ["primero", "segundo", "tercero"];
    for($i = 1; $i <= 10; $i++){
        echo "<p>".$i."</p>";
    }

    foreach($array as $element){
        echo "<p>".$element."</p>";
    }

    
    ?>
</body>
</html>