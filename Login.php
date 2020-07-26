<html>
    <head>
        <title>UPTC_MAPS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <LINK REL=StyleSheet HREF="style.css" TYPE="text/css">
    </head>
    <body>
        <!--        <form action="ValidarUsuario.php" method="POST">
                    <div class="form-group">
                        <label for="correoL">CORREO INSTITUCIONAL:</label>
                        <input required name="correoL" type="email" id="correoL" placeholder="correo institucional" class="form-control">
                        <br><br>
                        <label for="contraseñaL">CONTRASEÑA:</label>
                        <input required name="contraseñaL" type="password" id="contraseñaL" placeholder="contraseña" class="form-control">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">ACEPTAR</button>
                </form>-->
        <div class="container">
            <div class="info">
                <h1>Login UPTCmaps</h1><i class="fa fa-heart"></i>
            </div>
        </div>
        <div action="ValidarUsuario.php" method="POST" class="form">
            <div class="thumbnail"><img src="logo.png"/></div>
            <form action="ValidarUsuario.php" method="POST" class="login-form">
                <input required type="text" type="email" id="correoL" placeholder="Correo Institucional"/>
                <input required type="password" type="password" id="contraseñaL" placeholder="Contraseña"/>
                <button required type="submit" class="btn btn-success">Iniciar sesion</button>
                <p>No esta Regitrado?<a href="Registro.php" action="Registro.php">Crear una cuenta</a></p>
            </form>
        </div>
    </body>
</html>