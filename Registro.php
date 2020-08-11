<html>
    <head>
        <title>UPTC_MAPS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/StyleRegistro.css?1.0">
    </head>
    <body>
        <br><br><br><br>
        <div id="imagen">
            <div id="principal">
                <form action="AgregarUsuario.php" method="POST">
                    <div class="form-group">
                        <div id="cabeza">
                            <img id="logo1" src="Images/logo.png">
                            <img id="logo2" src="Images/logo.png">
                            <h1>REGISTRO</h1>
                            <br>
                        </div>
                        <!--<label for="correo">CORREO INSTITUCIONAL:</label>-->

                        <br>
                        <input required name="correo" type="email" id="correo" placeholder="Correo Institucional*" class="form-control">
                        <br><br>
                        <!--<label for="numeroId">NUMERO DE IDENTIFICACION:</label> -->
                        <input required name="numeroId" type="text" id="numeroId" placeholder="Numero De Identificación*" class="form-control">
                        <br><br>
                        <!--<label for="contraseña">CONTRASEÑA:</label> -->
                        <input required name="contraseña" type="password" id="contraseña" placeholder="Contraseña*" class="form-control">
                        <br><br>
                        <!--<label for="Ccontraseña">CONFIRMAR CONTRASEÑA:</label> -->
                        <input required name="Ccontraseña" type="password" id="Ccontraseña" placeholder="Confirmar Contraseña*" class="form-control">
                    </div>
                    <br>
                    <button id="baceptar" type="submit" class="btn btn-success">ACEPTAR</button>
                </form>
            </div>
        </div>
    </body>
</html>