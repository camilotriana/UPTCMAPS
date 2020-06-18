<?php
    $server="localhost";
    $user="camilo";
    $pass="mysql";
    $name="uptcmaps";
    $port="3306";
    
  $mysqli = new mysqli($server, $user, $pass, $name,$port);
?>
<html>
    <head>
        <title>UPTC_MAPS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>UPTC_MAPS</h1>
        <br><br><br><br>
        <div id="seleccionarLugar">
            <h2>SELECCIONAR LUGAR<h2>
                    <p>TIPO:
                        <select id="tipo" name="tipo">
                            <option value="0">Seleccione:</option>
                            <?php
                            $query = $mysqli->query("SELECT * FROM tipoLugar");
                            while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores[idTipo] . '">' . $valores[nombre] . '</option>';
                            }
                            ?>
                        </select>
                    </p>
                    <div id="listaLugares"></div>
        </div>
    </body>
 </html>
 
 <script type="text/javascript">
	$(document).ready(function(){
		cargarLista();

		$('#tipo').change(function(){
			cargarLista();
		});
	})
</script>
<script type="text/javascript">
	function cargarLista(){
		$.ajax({
			type:"POST",
			url:"CargarLugares.php",
			data:"Lugar=" + $('#tipo').val(),
			success:function(r){
				$('#listaLugares').html(r);
			}
		});
	}
</script>