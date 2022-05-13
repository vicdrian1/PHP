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
        function nombreFuncion(){
            echo "<p>Hola soy una función</p>";
        }

        nombreFuncion();

        function nombreFuncion2($parametro1, $parametro2){
            echo "<p>Parametro 1:".$parametro1."| Parametro 2:".$parametro2."</p>";
        }
    ?>
</body>
</html>