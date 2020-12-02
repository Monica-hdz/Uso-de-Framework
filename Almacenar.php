<?php

  $servidor = "localhost";
  $nombreusuario = "root";
  $password = "";
  $db = "tienda";

  $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

  if ($conexion->connect_error) {
    die("Conexió fallida: " . $conexion->connect_error);
  }
  if (isset($_POST['nombre'])) {
    if (isset($_POST['correo'])) {
      if (isset($_POST['cont'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contra = $_POST['cont'];


        $sql = "INSERT INTO usuarios(Nombre, Correo, Contraseña) VALUES ('$nombre', '$correo', '$contra')";

        if ($conexion->query($sql) === true) {
          echo "Datos guardados correctamente<br><a href='index.html'>Ingresar</a>";;
        }else {
          die("Error al insertar datos: " . $conexion->error);
        }
      }
    }
  }

?>
