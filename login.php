<?php
if (isset($_POST['user'], $_POST['passw'], $_POST['edad'])) {
    $nombre = htmlspecialchars($_POST['user']);
    $password = htmlspecialchars($_POST['passw']);
    $edad = (int) $_POST['edad'];

    if ($edad >= 18) {
        if ($nombre == "luis") {
            if ($password == "mendoza") {
                echo "<center>";
                echo "<br>Has iniciado sesión con el usuario $nombre <br>";
                echo "<br>Tu edad actual es de $edad años <br><br>:)";
                echo "</center>";
            } else {
                echo "Contraseña incorrecta";
            }
        } else {
            echo "El usuario no existe";
        }
    } else {
        echo "Eres menor de edad, no puedes acceder :(";
    }
} else {
    echo "Faltan datos en el formulario.";
}
?>