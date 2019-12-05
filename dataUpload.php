<?php

require "conexion.php";

$origen = $_GET['origen'];
$destino = $_GET['destino'];
$fecha = $_GET['fecha'];
$horaSolicitud =$_GET['horaSolicitud']; 
$horaLlegada =$_GET['horaLlegada'];
$nombre =$_GET['nombre'];
$telefono =$_GET['telefono'];
$costo = $_GET['costo'];
if(!empty($origen) || !empty($destino) || !empty($fecha) || !empty($horaSolicitud) || !empty($horaLlegada) || !empty($nombre) || !empty($telefono) || !empty($costo)){
	 $resultado = mysqli_query($con, "insert into viajes values(NULL,'$origen','$destino','$fecha','$horaSolicitud','$horaLlegada','$nombre', '$telefono', '$costo')");
	 mysqli_close($con);
}

?>