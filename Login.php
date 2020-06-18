<html>
    <head>
        <title>UPTC_MAPS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
            <h1>INICIAR SESION</h1>
                <br><br><br><br>
                <form action="ValidarUsuario.php" method="POST">
                       <div class="form-group">
				<label for="correoL">CORREO INSTITUCIONAL:</label>
                                <input required name="correoL" type="email" id="correoL" placeholder="correo institucional" class="form-control">
                                <br><br>
				<label for="contraseñaL">CONTRASEÑA:</label>
				<input required name="contraseñaL" type="password" id="contraseñaL" placeholder="contraseña" class="form-control">
			</div>
                    <br>
			<button type="submit" class="btn btn-success">ACEPTAR</button>
		</form>
    </body>
</html>