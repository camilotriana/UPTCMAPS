<html>
    <head>
        <title>UPTC_MAPS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
            <h1>REGISTRO</h1>
                <br><br><br><br>
                <form action="AgregarUsuario.php" method="POST">
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
		</form>
    </body>
</html>