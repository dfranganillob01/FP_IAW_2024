<?php
    include 'BD2.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $opciones = $_POST['opciones'];
        
        function consultas($opciones,$conn) {
            switch ($opciones) {
                case '1':
                    $sql = "SELECT * FROM asignaturas";
                    $comprobacion = mysqli_query($conn,$sql);
                    while ($row=mysqli_fetch_array($comprobacion)) {
                        echo $row['Codigo'].' '.$row['Nombre'].' '.$row['Creditos'].'</br>'; 
                    }
                    break;
                case '2':
                    $sql = "SELECT * FROM alumnos";
                    $comprobacion = mysqli_query($conn,$sql);
                    while ($row=mysqli_fetch_array($comprobacion)) {
                        echo $row['DNI'].' '.$row['Nombre'].' '.$row['Apellidos'].' '.$row['Localidad'].' '.$row['Año_inicio_estudios'].' '.$row['Modo_acceso'].'</br>'; 
                    }
                    break;
                case '3':
                    $sql = "SELECT * FROM matriculas";
                    $comprobacion = mysqli_query($conn,$sql);
                    while ($row=mysqli_fetch_array($comprobacion)) {
                        echo $row['ID'].' '.$row['DNI'].' '.$row['Codigo_asignatura'].'</br>';
                    }
                    break;
                default:
                    echo "Opción no válida";
                    break;
            }
        }
        consultas($opciones,$conn);
    }
?>