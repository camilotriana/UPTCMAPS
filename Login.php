<html>
    <head>
        <title>UPTC_MAPS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/StyleLogin.css?1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <br><br><br><br><br><br>
        <div id="imagen" class="container">
            <div id="principal">
                <form action="ValidarUsuario.php" method="POST">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="logo1" src="Images/logo.png">
                            </div>
                            <div class="col-md-6">
                                <h1 id="title">INICIAR SESION</h1>
                            </div>
                            <div class="col-md-3">
                                <img id="logo2" src="Images/logo.png">
                            </div>
                            <br>
                        </div>
                        <br><br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <input required name="correoL" type="email" id="correoL" placeholder="Correo Institucional*" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div id="correoR" class="col-md-12">
                                <input required name="contraseñaL" type="password" id="contraseñaL" placeholder="Contraseña*" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <button id="baceptar" type="submit" class="btn btn-warning">INICIAR SESION</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a id="recuperarC" href="RecuperarContraseña.php">Olvide mi contraseña</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br><br>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    </body>
</html>