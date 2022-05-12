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
        $helado = "Macedonia";
        $hela2 = "Pistacho";

        if($helado == "Macedonia"){
            echo "<p> Tengo un helado de Macedonia </p>";
        }else{
            echo "<p> No queda helado, solo masibon.</p>";
        }

        switch($hela2){
            case "Fresa":
                echo "<p>Fresa traviesa</p>";
            break;
            case "Pistacho":
                echo "<p>Pistacho Borracho</p>";
            break;

        }
    
    ?>
</body>
</html>