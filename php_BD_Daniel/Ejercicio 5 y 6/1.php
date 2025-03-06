<?php
    include 'Conex_3.php';

    function crear_bd($conn) {
        $sql = "SHOW DATABASES LIKE 'musica';";
        $comprobacion = mysqli_query($conn, $sql);
        $resultado = mysqli_num_rows($comprobacion);
        if ($resultado > 0) {
            echo "Base de datos ya existente";
            echo "</br><a href='inicio3.html'>Volver</a>";
        } else {
            $sql = "CREATE DATABASE IF NOT EXISTS musica;";
            $resultado = mysqli_query($conn,$sql);
            if ($resultado) {
                echo "Base de datos creada correctamente";
            } else {
                echo "".mysqli_error($conn);
            }
        }
    }
    crear_bd($conn);
?>