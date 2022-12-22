<?php
// Conexion a la base de datos
require "config/conexionProvi.php";
//  Funciones requeridas para la validacion de los datos.
require "function.php";

 if ($_POST['registrar']) {
    header("Location: principal.php");
 }else {
    $usuario = limpiarDatos(htmlspecialchars($_POST['nombre'])) ;
    $apellido = limpiarDatos(htmlspecialchars($_POST['apellido'])) ;
    $cedula = limpiarDatos(htmlspecialchars($_POST['cedula']));
    $password = limpiarDatos(htmlspecialchars($_POST['password']));
    $correo = limpiarDatos(htmlspecialchars($_POST['correo']));
    $perfil = limpiarDatos(htmlspecialchars($_POST['perfil']));
    $pass_c = sha1($password);

    $conex = $mysqli;
    $sql = "INSERT INTO usuarios (id_usuarios, usuario, apellido, cedula, password, correo, id_roles) VALUES (NULL, '$usuario', '$apellido', '$cedula', '$pass_c', '$correo', '$perfil');";

    $resultado = mysqli_query($conex, $sql);

    if ($resultado) {
        echo "<script>
            alert('El usuario se registro correctamente');
            location.assign('principal.php');
        </script>";
    }else {
        echo "<script>
            alert('El usuario no se registro correctamente');
            location.assign('principal.php');
        </script>";
    }
 }






