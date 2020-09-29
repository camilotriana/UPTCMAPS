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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="styles/StyleLugares.css?1.0">
    </head>
    <body>
        <br><br><br>
        <div id="imagen" class="container">
            <div id="principal">
                <div class="row">
                    <div class="col-md-3">
                        <img id="logo1" src="Images/logo.png">
                    </div>
                    <div class="col-md-6">
                        <h1 id="title">SELECCIONAR LUGAR</h1>
                    </div>
                    <div class="col-md-3">
                        <img id="logo2" src="Images/logo.png">
                    </div>
                </div>
                <br>
                <form action="validarLugares.php" method="POST">
                    <label><b>CATEGORIA:</b></label>
                    <select id="tipo" name="tipo">
                        <option value="1">Seleccione:</option>
                        <?php
                        $query = $mysqli->query("SELECT * FROM tipoLugar");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="' . $valores[idTipo] . '">' . $valores[nombre] . '</option>';
                        }
                        ?>
                    </select>
                    <br><br>
                    <div id="lista"></div>
                    <br>
                    <input id="baceptar" type="submit" name="registro" value="ACEPTAR" class="btn btn-warning">
                </form>
            </div>
        </div>
        <br><br>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
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