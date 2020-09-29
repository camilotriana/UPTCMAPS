<?php

if (!isset($_POST["correoL"])) {
    exit();
}

include_once 'basededatos.php';

$correoL = $_POST["correoL"];

$consulta = "SELECT correo, contraseña FROM user where (correo='$correoL')";
$EnviarConsulta = mysqli_query($conn, $consulta);

if (mysqli_fetch_assoc($EnviarConsulta)) {
    $consulta2 = "SELECT contraseña FROM user where (correo='$correoL')";
    $EnviarConsulta2 = mysqli_query($conn, $consulta2);
    while ($row = mysqli_fetch_array($EnviarConsulta2)) {
        $Rcontraseña = $row['contraseña'];
    }
    echo "<script>
               window.alert('CORREO ENVIADO EXITOSAMENTE');
               window.location= 'Login.php'
          </script>";
    /*mail($correoL,'RECUPERAR CONTRASEÑA', $Rcontraseña);*/
} else {
    echo "<script>
                window.alert('CORREO INCORRECTO O INEXISTENTE');
                window.location= 'RecuperarContraseña.php'
          </script>";
}

mysqli_close($conn);
?>

