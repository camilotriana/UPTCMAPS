<?php

if(!isset($_POST["correoL"]) || !isset($_POST["contraseñaL"])){
    exit();
     }
    
    include_once 'basededatos.php';
    
    $correoL = $_POST["correoL"];
    $contraseñaL = $_POST["contraseñaL"];
    
    $consulta = "SELECT correo, contraseña FROM usuarios where (correo='$correoL' AND contraseña='$contraseñaL')";
    $EnviarConsulta = mysqli_query($conn, $consulta);
    
    if(mysqli_fetch_assoc($EnviarConsulta)){
        echo "<script>
               alert('CORREO Y CONTRASEÑA ENCONTRADA');
               window.location= 'index.php'
               </script>";
    }
    else{
        echo "<script>
                alert('!!!!!ERROR CORREO O CONTRASEÑA INCORRECTA!!!!!!');
                window.location= 'Login.php'
               </script>";
               
    }
    
    mysqli_close($conn);
?>
