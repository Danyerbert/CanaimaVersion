<?php
// Funcion para limpiar los datos que entran por los input
    function limpiarDatos($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;

    }

// Function de validacion de la fecha para el envio a la base de datos.
    function validar_fecha($fecha){
        $valores = explode('/', $fecha);

        if (count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])) {
            return true;
        }else {
            return false;
        }
    }

?>