<?php
        include 'BD.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dni = $_POST['dni'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $localidad = $_POST['localidad'];
            $centro_de_estudios = $_POST['centro_de_estudios'];
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];
        
        $comprobacion = mysqli_query($conn,"SELECT * FROM usuarios WHERE Usuario = '$usuario'");
        $resultado = mysqli_num_rows($comprobacion);
        if ($resultado > 0) {
            echo "El usuario ya existe";
        } else {
            $sql = "INSERT INTO usuarios (DNI, Nombre, Apellidos, Localidad, Centro_de_estudios, Usuario, Contraseña)
            VALUES ('$dni', '$nombre', '$apellidos', '$localidad', '$centro_de_estudios', '$usuario', '$contraseña')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Registro exitoso";
        } else {
            echo "Error en el registro".mysqli_error($conn);
        }
        }
        }
?>