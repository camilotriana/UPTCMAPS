<?php
$idTipo = $_GET['tipo'];
$idLugar = $_GET['listaLugares'];
//echo "$idTipo + $idLugar";
echo "<script>
               alert('$idTipo + $idLugar');
               window.location= 'MostrarInformacion.php'
               </script>";
?>
