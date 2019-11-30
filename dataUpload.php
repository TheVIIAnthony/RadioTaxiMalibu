<?php

	include '../config/connect.php';

	$emp = $_POST['empresa'];
	$nombre = strip_tags($_POST['nombre']);
	$apellido = strip_tags($_POST['apellido']);
	$identificacion = strip_tags($_POST['identificacion']);
	$adeudo = $_POST['adeudo'];
	$asunto = $_POST['asunto'];
	$fecha = date('Y-m-d H:i:s');

	$saved = $cnx->query("INSERT INTO boletinados VALUES(NULL,'$nombre','$apellido','$identificacion','$asunto','$adeudo','$emp','$fecha')");


?>