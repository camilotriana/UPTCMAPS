<?php 

include_once 'basededatos.php';
$lugar=$_POST['Lugar'];

	$consulta="SELECT idLugares,nombre FROM lugares where idTipo='$lugar'";

	$result=mysqli_query($conn,$consulta);

	$cadena="<label><b>LUGAR:</b></label> 
			<select id='listaLugares'  name='listaLugares'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
	}
	echo  $cadena."</select>";
	
?>