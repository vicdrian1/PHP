<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Convierte string a Array y Array a string:

        $miCadena = "Victor, Laura, Alberto, Mónica, Eduardo, Irene, Ale";
        $arrayClase = explode(", ", $miCadena);

        $miNuevaCadena = implode(", ", $arrayClase);
        echo "<p>".$miNuevaCadena."</p>";

        //Convertir string a variables:

        $miString = "nombre=Fran&apellido=Aragon"; //índice y valor
        parse_str($miString, $test);
        var_dump(($test));

        //Busca si un string contiene un substring
        if(str_contains($miCadena, "fran")){
            echo "<p>Mi cadena no tiene a Fran</p>";
        }else{
            echo "<p>Mi cadena contiene a Fran</p>";
        }

        //Convertir texto a mayúsculas
        $miCadenaMayus = strtoupper($miCadena);
        echo $miCadenaMayus;

        //Convertir texto a minúsculas
        $miCadenaMinus = strtolower($miCadena);
        echo $miCadenaMinus;

        //Longitud de una cadena:
        $abecedario = "abcdefh";
        echo "<p>La variable tiene ".strlen($abecedario)."</p>";

        //Sustituye un string por otro string:
        $miCadenaModificada = str_replace ("Victor","Fran",$miCadena); 
        //Primero va lo que se quiere reemplazar, lo segundo qque quieres incluir y tercero el string al que le queremos hacer lo anterior.
        echo $miCadenaModificada;

        //Convierte string en array:
        $miNuevoArray = str_split($miCadenaModificada);
        var_dump($miNuevoArray);

        //Comprueba si es un número. Si no es un número, no dice nada, si lo es, expresa un 1.
        echo "<p>".is_numeric($miCadena)."</p>";

        //Acceder a la última letra de una palabra como si feura un array.
        echo $abecedario[strlen($abecedario)-1];

    
    ?>
</body>
</html>