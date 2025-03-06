<?php
include 'BD2.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $localidad = $_POST['localidad'];
        $año_inicio_estudios = $_POST['año_inicio_estudios'];
        $modo_acceso = $_POST['modo_acceso'];

        function alumnos($dni,$nombre,$apellidos,$localidad,$año_inicio_estudios,$modo_acceso,$conn) {
            $sql = "SELECT DNI FROM alumnos WHERE DNI = '$dni';";
            $resultado = mysqli_query($conn,$sql);
            $comprobacion = mysqli_num_rows($resultado);
            if ($comprobacion > 0) {
                echo "Este DNI ya esta asociado a un alumno, pulsa el boton de abajo para volver hacia atras </br>";
                echo "<a href='alumno.html'>Volver</a>";
            } else {
                $sql = "INSERT INTO alumnos (DNI, Nombre, Apellidos, Localidad, Año_inicio_estudios, Modo_acceso) 
                VALUES ('$dni','$nombre','$apellidos','$localidad','$año_inicio_estudios','$modo_acceso');";

                if (mysqli_query($conn,$sql)) {
                    echo "Registro exitoso";
                } else {
                    echo "Error en el registro".mysqli_error($conn);
                }
            }
        }
        alumnos($dni,$nombre,$apellidos,$localidad,$año_inicio_estudios,$modo_acceso,$conn);

    }
?>