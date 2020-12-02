<?php

    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "";
    $db = "tienda";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    if ($conexion->connect_error) {
      die("Conexió fallida: " . $conexion->connect_error);
    }

    if (isset($_POST['correo']) && isset($_POST['contra'])) {
      $correo = $_POST['correo'];
      $contra = $_POST['contra'];

      session_start();
      $_SESSION['correo'] = $correo;

      $consulta = "SELECT * FROM usuarios where Correo = '$correo' and Contraseña = '$contra'";
      $resultado = mysqli_query($conexion,$consulta);

      $filas = mysqli_num_rows($resultado);

      if ($filas) {
        header("location:index.html");
      }else {
        ?>
        <?php
          include("loginvista.html");
          include("index.html");
         
        ?>
        <h1 class="bad">Error en la autentificacion</h1>
        <?php
      }
      mysql_free_result($resultado);
      mysql_close($conexion);
    }else {
      die ("Error al iniciar sesion: " . $conexion->error);
    }
    ?>
