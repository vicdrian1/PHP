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
        $arraycito = ["Plátano", "Manzana", "Pera", "Tomate", "Fresa"];
        for ($i =0; $i < count($arraycito); $i++){ //count es el equivalente al .length en javascript
            echo "<p>".$arraycito[$i]."</p>";
        }
    ?>
</body>
</html>