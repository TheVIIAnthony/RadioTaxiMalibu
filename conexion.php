<?php 
$mysqli = new mysqli('localhost','antonio','123!"#qwe');
if($mysqli-> connect_error){
die('error de conexion' . $mysqli-> connect_error);
}
echo "conexion exitosa";
?>
