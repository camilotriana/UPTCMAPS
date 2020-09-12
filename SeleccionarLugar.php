<?php
$server = "localhost";
$user = "root";
$pass = "mariadb";
$name = "uptcmaps";
$port = "3306";

$mysqli = new mysqli($server, $user, $pass, $name, $port);
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
        <link rel="stylesheet" type="text/css" href="styles/StyleLugares.css?1.0">
    </head>
    <body>
        <br><br><br><br>
        <div id="imagen">
            <div id="principal">
                <div id="cabeza">
                    <img id="logo1" src="Images/logo.png">
                    <img id="logo2" src="Images/logo.png">
                    <h1>SELECCIONAR LUGAR</h1>
                </div>
                <br><br>
                <form action="validarLugares.php">
                <p><b>CATEGORIA:</b>
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
                    <div id="lista"></div>
                    <br>
                    <input id="aceptar" type="submit" name="registro" value="ACEPTAR">
                </form>
            </div>
        </div>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        cargarLista();

        $('#tipo').change(function () {
            cargarLista();
        });
    })
</script>
<script type="text/javascript">
    function cargarLista() {
        $.ajax({
            type: "POST",
            url: "CargarLugares.php",
            data: "Lugar=" + $('#tipo').val(),
            success: function (r) {
                $('#lista').html(r);
            }
        });
    }
</script>