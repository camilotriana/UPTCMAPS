<?php

if (!isset($_POST["correo"]) || !isset($_POST["numeroId"]) || !isset($_POST["contraseña"]) || !isset($_POST["Ccontraseña"])) {
    exit();
}

include_once "basededatos.php";

$correo = $_POST["correo"];
$numeroId = $_POST["numeroId"];
$contraseña = $_POST["contraseña"];
$Ccontraseña = $_POST["Ccontraseña"];

if (preg_match("/^[A-Za-z]{2,20}(\.){1}[0-9a-zA-Z]{2,20}(@){1}(uptc.edu.co)$/", $correo)) {
    if (preg_match("/^[0-9]{7,12}$/", $numeroId)) {
        if (preg_match("/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/", $contraseña)) {
            if ($contraseña == $Ccontraseña) {
                $consulta = "INSERT INTO usuarios (correo, numeroId, contraseña) VALUES ('$correo', '$numeroId', '$contraseña')";

                if (mysqli_query($conn, $consulta)) {
                    echo "<script>
                          alert('Registro agregado');
                          window.location= 'index.php'
                          </script>";
                } else {
                    echo "<script>
                alert('ERROR EL CORREO INGRESADO YA EXISTE');
                window.location= 'Registro.php'
               </script>";
                }
            } else {
                echo "<script>
                alert('LAS CONTRASEÑAS NO COINCIDEN');
                window.location= 'Registro.php'
               </script>";
            }
        } else {
            echo "<script>
                alert('LA CONTRASEÑA INGRESADA ES INCORRECTA (DEBE INCLUIR DE 8-16 CARACTERES, ALMENOS UNA MINUSCULA, UNA MAYUSCULA Y UN NUMERO)');
                window.location= 'Registro.php'
               </script>";
        }
    } else {
        echo "<script>
                alert('LA IDENTIFICACION INGRESADA ES INCORRECTA');
                window.location= 'Registro.php'
               </script>";
    }
} else {
    echo "<script>
                alert('EL CORREO INGRESADO ES INCORRECTO');
                window.location= 'Registro.php'
          </script>";
}

mysqli_close($conn);

?>