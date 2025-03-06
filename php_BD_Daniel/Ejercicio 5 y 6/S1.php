<?php
    include 'BD3.php';

    function crear_tabla2($conn) {
        $sql = "SHOW TABLES LIKE 'Obras';";
        $resultado = mysqli_query($conn,$sql);
        $comprobacion = mysqli_num_rows($resultado);
        if ($comprobacion > 0) {
            echo "La tabla ya existe";
            echo "</br><a href='inicio3.html'>Volver</a>";
        } else {
            $sql = "CREATE TABLE Obras (codigo_obra INT AUTO_INCREMENT PRIMARY KEY,
                nombre_obra VARCHAR(150), autor VARCHAR(150), año_creacion DATE);";
            $resultado = mysqli_query($conn,$sql);
            if ($resultado) {
                echo "Tabla creada correctamente";
            } else {
                echo "".mysqli_error($conn);
            }
        }
    }
    crear_tabla2($conn);
?>