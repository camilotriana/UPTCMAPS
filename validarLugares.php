<?php
include_once 'basededatos.php';
$id_lugar = $_POST['listaLugares'];

$sentencia = "SELECT nombre, nPlanta, descripcion, latitud, longitud FROM lugares WHERE idlugares ='" . $id_lugar . "'";
$resultado = mysqli_query($conn, $sentencia);
?>
<html>
    <head>
        <title>UPTC_MAPS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/styleInformacion.css?1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <script src="Js/CargarMapa.js"></script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqY3JL1mVE25En3-iksr6U6y_BfWF9ID0&callback=initMap">
        </script>
        <br>
        <div id="imagen" class="container">
            <div id="principal">
                <div class="row"> 
                    <div class="col-md-3">
                        <img id="logo1" src="Images/logo.png">
                    </div>
                    <div class="col-md-6">
                        <h1 id="title">DESCRIPCION LUGAR</h1>
                    </div>
                    <div class="col-md-3">
                        <img id="logo1" src="Images/logo.png">
                    </div>
                </div>
                <br><br>
                <div class="row"> 
                    <div class="col-md-12">
                        <table id="tabla" border="1" >
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>NUMERO DE PLANTA</th>
                                    <th>DESCRIPCION</th>
                                    <th>LATITUD</th>
                                    <th>LONGITUD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($bus = mysqli_fetch_array($resultado)) { ?>
                                    <tr>
                                        <td><?php echo $bus['nombre'] ?></td>
                                        <td><?php echo $bus['nPlanta'] ?></td>
                                        <td><?php echo $bus['descripcion'] ?></td>
                                        <td id="lat"><?php echo $bus['latitud'] ?></td>
                                        <td id="lon"><?php echo $bus['longitud'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br><br>
                <div id="mapa"> 
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <form action="SeleccionarLugar.php" method="POST">
                            <input id="batras" type="submit" name="registro" value="ATRAS" class="btn btn-warning">
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form action="index.php" method="POST">
                            <input id="bpp" type="submit" name="registro" value="PAGINA PRINCIPAL" class="btn btn-warning">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    </body>
</html>   