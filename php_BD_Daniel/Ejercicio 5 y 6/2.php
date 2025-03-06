<?php
    include 'BD3.php';

    function crear_tabla($conn) {
        $sql = "SHOW TABLES LIKE 'Instrumento';";
        $resultado = mysqli_query($conn,$sql);
        $comprobacion = mysqli_num_rows($resultado);
        if ($comprobacion > 0) {
            echo "La tabla ya existe";
            echo "</br><a href='inicio3.html'>Volver</a>";
        } else {
            $sql = "CREATE TABLE Instrumento (Codigo INT AUTO_INCREMENT PRIMARY KEY,
            Nombre VARCHAR(100) NOT NULL,
            Tipo ENUM('viento', 'cuerda', 'percusión', 'eléctricos') NOT NULL,
            Origen ENUM('aborigen', 'cubano', 'europeo', 'mexicano', 'guatemalteco') NOT NULL,
            Modelo VARCHAR(100));";
            $resultado = mysqli_query($conn,$sql);
            if ($resultado) {
                echo "Tabla creada correctamente";
            } else {
                echo "".mysqli_error($conn);
            }
        }
    }
    crear_tabla($conn);
?>