<?php
    if(isset($_POST["enviar"])){
        $error_nombre = ($_POST["usuario"] == "");
        $error_edad = ($_POST["edad"] == "");
        $error = $error_usuario || $error_edad;

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
            echo "<p> <span style='font-weight: bold'> Edad: </span>".$_POST["edad"]."</p>";
            echo "<p> <span style='font-weight: bold'> Correo: </span>".$_POST["correo"]."</p>";
            echo "<p> <span style='font-weight: bold'> Sexo: </span>".$_POST["genero"]."</p>";
            echo "<p> <span style='font-weight: bold'> Asunto: </span>".$_POST["asunto"]."</p>";
            echo "<p> <span style='font-weight: bold'> Comentarios: </span>".$_POST["opinion"]."</p>";


        ?>
    </body>
    </html> 

<?php    
    }else{
        header("Location: ejercicio11.html");
    }
?>