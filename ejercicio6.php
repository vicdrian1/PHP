<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function parametrizada($parametro1, $parametro2){
            echo "<p> Parámetro 1: ".$parametro1." | Parámetro 2: ".$parametro2."</p>";
        }
        
        parametrizada("Vainilla", "Stracciatella")
    ?>
</body>
</html>