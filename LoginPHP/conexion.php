<?php
include("configuracion.php");
$conexion=new mysqli($host,$user,$password,$database);
if($conexion){
  echo "se conecto";


}else{
  echo "conectado";
    exit();
}










 ?>
