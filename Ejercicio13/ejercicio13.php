<?php
    if(isset($_POST["comprobar"])){
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
        <h1>Bienvenido de vuelta</h1>
    </body>
    </html>
<?php    
    }else{
        header("Location: formulario.html");
    }
?>