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
        $array = ["primero" => 1, "segundo" =>2, "tercero" => 3]; //variables con indice
        $arraySin = ["Manzana", "Pera", "Plátano", "Frambuesa"];


        // echo $array["segundo"];

        $array[] = 3; //añade un elemento sin índice al array. El primero sin nombre será un 0.

        var_dump($array);

        unset($arraySin[1]); //Elimina el elemento que ocupe la posición 1, nada ocupará su lugar. Unset en general sirve par aeliminar lo especificado.
    ?>
</body>
</html>