<?php
    if(isset($_POST["enviar"])){

        $primera = $_POST["primera"];
        $segunda = $_POST["segunda"];
        echo "<h1>Ando Rimando</h1>";
        if($primera[strlen($primera)-1] == $segunda[strlen($segunda)-1] && $primera[strlen($primera)-2] == $segunda[strlen($segunda)-2]){
            echo "<p>Las palabras ".$primera." y ".$segunda." riman del todo :D!</p>";
        }else if($primera[strlen($primera)-1] == $segunda[strlen($segunda)-1]){
            echo "<p>Las palabras ".$primera." y ".$segunda." riman un poquito :)!</p>";
        }else{
            echo "<p>Las palabras ".$primera." y ".$segunda." no riman nada :(</p>";
        }

    }else{
        header("Location: ejercicio15.html");
    }
?>