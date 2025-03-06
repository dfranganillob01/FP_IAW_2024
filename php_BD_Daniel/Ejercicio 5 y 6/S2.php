<?php
    include 'BD3.php';

    function crear_tabla3($conn) {
        $sql = "SHOW TABLES LIKE 'Interpretacion';";
        $resultado = mysqli_query($conn,$sql);
        $comprobacion = mysqli_num_rows($resultado);
        if ($comprobacion > 0) {
            echo "La tabla ya existe";
            echo "</br><a href='inicio3.html'>Volver</a>";
        } else {
            $sql = "CREATE TABLE Interpretacion (id INT AUTO_INCREMENT PRIMARY KEY,
                codigo_obra INT NOT NULL, codigo_instrumento INT NOT NULL, fecha DATE,
                FOREIGN KEY (codigo_obra) REFERENCES Obras(codigo_obra) ON DELETE CASCADE,
                FOREIGN KEY (codigo_instrumento) REFERENCES Instrumento(codigo) ON DELETE CASCADE);";
            $resultado = mysqli_query($conn,$sql);
            if ($resultado) {
                echo "Tabla creada correctamente";
            } else {
                echo "".mysqli_error($conn);
            }
        }
    }
    crear_tabla3($conn);
?>