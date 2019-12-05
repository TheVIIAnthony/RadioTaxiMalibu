<?php 
$host ='localhost';
$usuario='root';
$clave='';
$bd='rtm';
$con = mysqli_connect($host,$usuario,$clave,$bd);
if(mysqli_connect_errno()){
	echo 'error de conexion' . mysql_connect_error();
}
echo "conexion exitosa";
?>
