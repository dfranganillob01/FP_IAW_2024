<?php
    include 'BD2.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dni = $_POST['dni'];
        $asignaturas = $_POST['asignaturas'];
    
        function matricular($dni,$asignaturas,$conn) {
            foreach ($asignaturas as $asig) {
                $sql = "SELECT DNI FROM matriculas WHERE DNI = '$dni' AND Codigo_asignatura = '$asig';";
                $resultado = mysqli_query($conn,$sql);
                $comprobacion = mysqli_num_rows($resultado);
                if ($comprobacion > 0) {
                    echo "Este DNI ya esta asociado a esta asignatura </br>";
                    echo "<a href='matriculación.html'>Volver</a>";
                } else {
                    $sql = "INSERT INTO matriculas (DNI, Codigo_asignatura) VALUES ('$dni','$asig');";

                    if (mysqli_query($conn,$sql)) {
                        echo "Registro exitoso";
                    } else {
                        echo "Error en el registro".mysqli_error($conn);
                    }
                }
            }
        }
        matricular($dni,$asignaturas,$conn);
    }
?>