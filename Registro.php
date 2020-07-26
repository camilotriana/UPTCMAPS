<html>
    <head>
        <title>UPTC_MAPS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <LINK REL=StyleSheet HREF="style.css" TYPE="text/css">
    </head>
    <body>
        <div class="container">
            <div class="info">
                <h1>Registro UPTCmaps</h1><i class="fa fa-heart"></i>
            </div>
        </div>
        <div class="form">
            <div class="thumbnail"><img src="logo.png"/></div>
            <form action="AgregarUsuario.php" method="POST" class="login-form">
                <input required name="correo" type="email" id="correo" type="text" placeholder="Correo"/>
                <input required name="numeroId" type="text" id="numeroId" type="password" placeholder="Numero de identificacion"/>
                <input required name="contraseña" type="password" id="contraseña" type="password" placeholder="Contraseña"/>
                <input required name="Ccontraseña" type="password" id="Ccontraseña" type="text" placeholder="Confirmar contraseña"/>
                <button type="submit" class="btn btn-success">Crear</button>
                <p>Ya esta regitrado?<a href="Login.php">Inicie sesion</a></p>
            </form>
        </div>
<!--        <form action="AgregarUsuario.php" method="POST">
            <div class="form-group">
                <label for="correo">CORREO INSTITUCIONAL:</label>
                <input required name="correo" type="email" id="correo" placeholder="correo" class="form-control">
                <br><br>
                <label for="numeroId">NUMERO DE IDENTIFICACION:</label>
                <input required name="numeroId" type="text" id="numeroId" placeholder="numero de identificación" class="form-control">
                <br><br>
                <label for="contraseña">CONTRASEÑA:</label>
                <input required name="contraseña" type="password" id="contraseña" placeholder="contraseña" class="form-control">
                <br><br>
                <label for="Ccontraseña">CONFIRMAR CONTRASEÑA:</label>
                <input required name="Ccontraseña" type="password" id="Ccontraseña" placeholder="confirmar contraseña" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-success">ACEPTAR</button>
        </form>-->
    </body>
</html>