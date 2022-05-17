<?php
    if(isset($_POST["enviar"])){
        $error_correo = ($_POST["correo"] == "");
        $error_mensaje = ($_POST["mensaje"] == "");
        $error = $error_correo || $error_mensaje;

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
                    <h1>Datos completados:</h1>
                    <?php
                         echo "<p> <span style='font-weight: bold;'> Nombre completo: </span>".$_POST["nombre"]."</p>";
                         echo "<p> <span style='font-weight: bold;'> E-mail: </span>".$_POST["correo"]."</p>";
                         echo "<p> <span style='font-weight: bold;'> Color favorito: </span>".$_POST["color"]."</p>";

                         if(isset($_POST["Intereses"])){
                            echo "<p style='font-weight: bold;'>Intereses:</p>";    
                            echo "<ul>";
                            for($i = 0; $i < count($_POST["Intereses"]); $i++){
                                echo "<li>".$_POST["Intereses"][$i]."</li>";
                            }
                            echo "</ul>";
                        }else{
                            echo "<p> <span style='font-weight: bold;'> Intereses: </span> No has seleccionado ningún interés</p>";

                        }

                        echo "<p> <span style='font-weight: bold;'> Tarifa elegida: </span>".$_POST["tarifas"]."</p>";
                        echo "<p> <span style='font-weight: bold;'> Mensaje: </span>".$_POST["mensaje"]."</p>";
                    ?>
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
                        body{
                            display: flex;
                            justify-content: center;
                        }
                    </style>
                </head>
                <body>
                    <form action="ejercicio14.php" method="POST">

                        <h1>Formulario de Registro</h1>

                        <div>
                            <label for="nombre">Nombre completo:</label>
                            <input type="text" id="nombre" name="nombre" value="<?php if ($error){ echo $_POST["nombre"];}?>">
                        </div>
                        <p></p>
                        <div>
                            <label for="correo">E-mail:</label>
                            <input type="email" id="correo" name="correo" value="<?php if (!$error_correo){ echo $_POST["correo"];}?>">
                            <?php if($error_correo){ echo "<span style='color: red;'> *EL CORREO ES OBLIGATORIO*</span>";} ?>
                        </div>
                        <p></p>
                        <div>
                            <span>Mensaje:</span>
                            <textarea name="mensaje" id="mensaje" cols="30" rows="5"><?php if (!$error_mensaje){ echo $_POST["mensaje"];}?></textarea>
                            <?php if($error_mensaje){ echo "<span style='color: red;'> *EL MENSAJE ES OBLIGATORIO*</span>";} ?>
                        </div>
                        <div>
                            <p>Escoge tu color favorito:</p>
                            <div>
                                <input type="radio" name="color" id="rojo" value="Rojo" <?php
                                    if($_POST["color"] == "Rojo"){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="rojo">Rojo</label>
                            </div>
                            <div>
                                <input type="radio" name="color" id="azul" value="Azul" <?php
                                    if($_POST["color"] == "Azul"){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="azul">Azul</label>
                            </div>
                            <div>
                                <input type="radio" name="color" id="verde" value="Verde" <?php
                                    if($_POST["color"] == "Verde"){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="verde">Verde</label>
                            </div>
                        </div>
                        <div>
                            <p>Escoge uno o más temas de tu interés:</p>
                            <div>
                                <input type="checkbox" name="Intereses[]" id="animales" value="Animales" <?php
                                    $intereses = $_POST["Intereses"];
                                    if(isset($_POST["Intereses"]) && in_array("Animales", $intereses)){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="animales">Animales</label>
                            </div>
                            <div>
                                <input type="checkbox" name="Intereses[]" id="libros" value="Libros"<?php
                                    $intereses = $_POST["Intereses"];
                                    if(isset($_POST["Intereses"]) && in_array("Libros", $intereses)){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="libros">Libros</label>
                            </div>
                            <div>
                                <input type="checkbox" name="Intereses[]" id="viajar" value="Viajar"<?php
                                    $intereses = $_POST["Intereses"];
                                    if(isset($_POST["Intereses"]) && in_array("Viajar", $intereses)){
                                        echo "checked";
                                    }
                                ?>>
                                <label for="viajar">Viajar</label>
                            </div>
                        </div>
                        <p></p>
                        <div>
                            <span>Elige una tarifa:</span>
                            <select name="tarifas" id="tarifas">
                                <option value="Tarifa 1" <?php
                                    if($_POST["tarifas"] == "Tarifa 1"){
                                        echo "selected";
                                    }
                                ?>>Tarifa 1</option>
                                <option value="Tarifa 2" <?php
                                    if($_POST["tarifas"] == "Tarifa 2"){
                                        echo "selected";
                                    }
                                ?>>Tarifa 2</option>
                                <option value="Tarifa 3" <?php
                                    if($_POST["tarifas"] == "Tarifa 3"){
                                        echo "selected";
                                    }
                                ?>>Tarifa 3</option>
                            </select>
                        </div>
                        <button type="submit" style="margin-top: 10px;" name="enviar">Enviar</button>
                    </form>
                </body>
                </html>
                <?php
        }
    }else{
        header("Location: ejercicio14.html");
    }