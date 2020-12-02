<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="tienda";
$enlace = mysqli_connect($servidor,$usuario,$clave,$basededatos);
if (!$enlace){
	echo"Error";
}
?>