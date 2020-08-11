<html>
    <head>
        <title>UPTC_MAPS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/StyleLogin.css?1.0">
    </head>
    <body>
        <br><br><br><br><br><br>
        <div id="imagen">
            <div id="principal">
                <form action="ValidarUsuario.php" method="POST">
                    <div class="form-group">
                        <div id="cabeza">
                            <img id="logo1" src="Images/logo.png">
                            <img id="logo2" src="Images/logo.png">
                            <h1>INICIAR SESION</h1>
                        </div>
                        <br><br><br>
                        <!-- <label for="correoL">CORREO INSTITUCIONAL:</label> -->
                        <input required name="correoL" type="email" id="correoL" placeholder="Correo Institucional" class="form-control">
                        <br><br>
                        <!-- <label for="contraseñaL">CONTRASEÑA:</label> -->
                        <input required name="contraseñaL" type="password" id="contraseñaL" placeholder="Contraseña" class="form-control">
                    </div>
                    <br>
                    <button id="baceptar" type="submit" class="btn btn-success">ACEPTAR</button>
                </form>
            </div>
        </div>
    </body>
</html>