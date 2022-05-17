<?php
    if(isset($_POST["enviar"])){
        $error_nombre = ($_POST["nombre"] == "");
        $error_comentarios = ($_POST["comentarios"] == "");
        $error = $error_nombre || $error_comentarios;

        if(!$error){
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
                            echo "<p> <span style='font-weight: bold;'> Nombre: </span>".$_POST["nombre"]."</p>";
                            echo "<p> <span style='font-weight: bold;'> Nacido en: </span>".$_POST["ciudad"]."</p>";
                            echo "<p> <span style='font-weight: bold;'> Sexo: </span>".$_POST["genero"]."</p>";

                            if(isset($_POST["Aficiones"])){
                                echo "<p style='font-weight: bold;'>Aficiones:</p>";    
                                echo "<ul>";
                                for($i = 0; $i < count($_POST["Aficiones"]); $i++){
                                    echo "<li>".$_POST["Aficiones"][$i]."</li>";
                                }
                                echo "</ul>";
                            }else{
                                echo "<p> <span style='font-weight: bold;'> Intereses: </span> No has seleccionado ninguna afición </p>";

                            }

                            echo "<p><span style='font-weight: bold;'>Comentarios: </span>".$_POST["comentarios"]."</p>";
                        ?>
            
            <?php
        }else{
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
                    <h1>Esta es mi super página 2</h1>

                    <form action="ejercicio12.php" method="POST">
                        <div>
                            <label for="nombre" name="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" value="<?php if (!$error_nombre){ echo $_POST["nombre"];}?>">
                            <?php
                                if($error_nombre){
                                    echo "<span>*NOMBRE OBLIGATORIO</span>";
                                }
                            ?>
                        </div>
                        <p></p>
                        <div>
                            <span>Nacido en:</span>
                            <select name="ciudad" id="ciudad">
                                <option value="Sevilla" <?php
                                if($_POST["ciudad"] == "Sevilla"){
                                    echo "selected";
                                }
                            ?>>Sevilla</option>
                                <option value="Málaga" <?php
                                if($_POST["ciudad"] == "Málaga"){
                                    echo "selected";
                                }
                            ?>>Málaga</option>            
                                <option value="Cádiz" <?php
                                if($_POST["ciudad"] == "Cádiz"){
                                    echo "selected";
                                }
                            ?>>Cádiz</option>
                                <option value="Almería" <?php
                                if($_POST["ciudad"] == "Almería"){
                                    echo "selected";
                                }
                            ?>>Almería</option>
                                <option value="Huelva" <?php
                                if($_POST["ciudad"] == "Huelva"){
                                    echo "selected";
                                }
                            ?>>Huelva</option>
                                <option value="Jaén" <?php
                                if($_POST["ciudad"] == "Jaén"){
                                    echo "selected";
                                }
                            ?>>Jaén</option>
                                <option value="Granada" <?php
                                if($_POST["ciudad"] == "Granada"){
                                    echo "selected";
                                }
                            ?>>Granada</option>
                            </select>
                        </div>
                        <p></p>
                        <div>
                            <span>Sexo:</span>
                            <input type="radio" name="genero" id="hombre" value="Hombre"<?php
                                if($_POST["genero"] == "Hombre"){
                                    echo "checked";
                                }
                            ?>>
                            <label for="hombre">Hombre</label>
                    
                            <input type="radio" name="genero" id="mujer" value="Mujer" <?php
                                if($_POST["genero"] == "Mujer"){
                                    echo "checked";
                                }
                            ?>>
                            <label for="mujer">Mujer</label>
                        </div>
                        <p></p>
                        <div>
                            <span>Aficiones:</span>
                            <input type="checkbox" name="Aficiones[]" id="deportes" value="Deportes"<?php
                                $aficiones = $_POST["Aficiones"];
                                if(isset($aficiones) && in_array("Deportes", $aficiones)){
                                    echo "checked";
                                }
                            ?>>
                            <label for="deportes">Deportes</label>
                    
                            <input type="checkbox" name="Aficiones[]" id="lectura" value="Lectura"<?php
                                $aficiones = $_POST["Aficiones"];
                                if(isset($aficiones) && in_array("Lectura", $aficiones)){
                                    echo "checked";
                                }
                            ?>>
                            <label for="deportes">Lectura</label>
                    
                            <input type="checkbox" name="Aficiones[]" id="otros" value="Otros"<?php
                                $aficiones = $_POST["Aficiones"];
                                if(isset($aficiones) && in_array("Otros", $aficiones)){
                                    echo "checked";
                                }
                            ?>>
                            <label for="otros">Otros</label>
                        </div>
                        <p></p>
                        <div>
                            <span>Comentarios:</span>
                            <textarea name="comentarios" id="comentarios" cols="50" rows="3"><?php if (!$error_comentarios){ echo $_POST["comentarios"];}?></textarea>
                            <?php
                                if($error_comentarios){
                                    echo "<span>*COMENTARIO OBLIGATORIO</span>";
                                }
                            ?>
                        </div>
                        <p></p>
                        <button type="submit" name="enviar" id="enviar">Enviar</button>
                    </form>
                </body>
                </html>
            <?php
        }
            
    }else{
        header("Location: ejercicio12.html");
    }
?>