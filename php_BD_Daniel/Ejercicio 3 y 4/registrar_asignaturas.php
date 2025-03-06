<?php
    include 'BD2.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $creditos = $_POST['creditos'];
    
    function asignaturas($codigo,$nombre,$creditos,$conn) {
        $sql = "SELECT codigo FROM asignaturas WHERE codigo = '$codigo'";
        $comprobacion = mysqli_query($conn,$sql);
        $resultado = mysqli_num_rows($comprobacion);
        if ($resultado > 0) {
            echo "El codigo ya esta registrado, puedes volver a intentarlo dandole al boton de abajo </br>";
            echo "<a href='asignaturas.html'>Volver</a>";
        } else {
            $insercion = "INSERT INTO asignaturas (Codigo, Nombre, Creditos) VALUES ('$codigo', '$nombre', '$creditos')";

            if (mysqli_query($conn,$insercion)) {
                echo "Registro exitoso";
            } else {
                echo "Error en el registro".mysqli_error($conn);
            }
        }
        }
    asignaturas($codigo,$nombre,$creditos,$conn);
    }
?>