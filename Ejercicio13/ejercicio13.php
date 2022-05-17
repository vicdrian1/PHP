<?php
    if(isset($_POST["enviar"])){

        $error_usuario = ($_POST["usuario"] == "");
        $error_contraseña = ($_POST["password"] == "");
        $error = $error_usuario || $error_contraseña;

        if(!$error){
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
                    <h1>Has iniciado sesión</h1>
                    <span style="font-weight: bold;">Bienvenido de vuelta, </span><?php echo $_POST["usuario"];?>
                </body>
                </html>
            <?php

        }else{
            ?>
            <!DOCTYPE html>
                <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                    <style>
                        form{
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                        }
                    </style>
                </head>
                <body>
                    <form action="ejercicio13.php" method="POST">
                        <h1>Iniciar Sesión</h1>
                        <div style="margin-bottom: 10px;">
                            <input type="text" name="usuario" id="usuario" placeholder="Usuario" value="<?php if (!$error_usuario) echo $_POST["usuario"];?>">
                        </div>
                        <div>
                        <input type="password" name="password" id="password" placeholder="Contraseña" style="margin-bottom: 10px;" value="<?php if (!$error_contraseña){ echo $_POST["password"];}?>">
                        </div>
                        <button type="submit" id="enviar" name="enviar" style="margin-bottom: 10px;">Iniciar sesión</button>
                        <?php if($error_usuario){ echo "<span style='color: red;'>*INTRODUCE UN NOMBRE DE USUARIO*</span>";} ?>
                        <?php if($error_contraseña){ echo "<span style='color: red;'>*INTRODUCE LA CONTRASEÑA*</span>";} ?>
                        <p>¿No estás registrado aún? <a href="#">Regístrate</a></p>
                    </form>
                </body>
                </html>
            
            <?php
        }    
    }else{
        header("Location: formulario.html");
    }
?>