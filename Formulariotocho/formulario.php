<?php
    if(isset($_POST["comprobar"])){

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Comprobación de Datos del formulario:</h1>
        <?php
            echo "<p> <span style='font-weight: bold'> Nombre: </span>".$_POST["nombre"]."</p>";
            echo "<p> <span style='font-weight: bold'> Apellido: </span>".$_POST["apellidos"]."</p>";
            echo "<p> <span style='font-weight: bold'> Correo: </span>".$_POST["correo"]."</p>";
            echo "<p> <span style='font-weight: bold'> Correo: </span>".md5($_POST["pass"])."</p>";


            $genero = $_POST["genero"];
            if(isset($genero)){
                echo "<p> <span style='font-weight: bold'> Género: </span>".$genero."</p>";
            }else{
                echo "<p> <span style='font-weight: bold'> Género: </span>No has seleccionado género</p>";
            }
            
            
            
            $nivelEstudios = $_POST["nivelEstudios"];
            echo "<p> <span style='font-weight: bold'> Nivel de estudios: </span>".$nivelEstudios."</p>";

            if(isset($_POST["Intereses"])){
                echo "<p>Intereses:</p>";    
                echo "<ul>";
                for($i = 0; $i < count($_POST["Intereses"]); $i++){
                    echo "<li>".$_POST["Intereses"][$i]."</li>";
                }
                echo "</ul>";
            }else{
                echo "<p> <span style='font-weight: bold'> Intereses: </span> No has seleccionado ningún interés </p>";

            }

            $diaSemana = $_POST["semana"];
            echo "<p> <span style='font-weight: bold'> Día de la semana en la que quiere recibir el boletín: </span>".$diaSemana." </p>";

            echo "<p> <span style='font-weight: bold'> Su opinión: </span>".$_POST["opinion"]."</p>"; 
        ?>
    </body>
    </html> 

<?php    
    }else{
        header("Location: formulario.html");
    }
?>