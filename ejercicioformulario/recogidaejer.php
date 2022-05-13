<?php
    if(isset($_POST["btnEnviar"])){
?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>SESIÓN INICIADA</h1>
        <?php
            echo "<p>Bienvenido de nuevo, ".$_POST["usuario"]."</p>" ;
            echo "<ul>";
            for($i = 0; $i < count($_POST["Aficiones"]); $i++){
                echo "<li>".$_POST["Aficiones"][$i]."</li>";
            }
            echo "</ul>";
        ?>
    </body>
    </html>
<?php
    }else{
        header("Location: ejerformu.html");
    }
?>