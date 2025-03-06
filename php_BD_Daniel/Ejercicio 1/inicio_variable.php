<?php
        include 'BD.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];
        
        $sql = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Contraseña = '$contraseña'";
        $comprobacion = mysqli_query($conn,$sql);
        $resultado = mysqli_num_rows($comprobacion);
        if ($resultado > 0) {
            echo "Buenas usuario ".$usuario."</br>";
            while ($row=mysqli_fetch_array($comprobacion)) {
                echo $row['DNI'].' '.$row+['Nombre'].' '.$row['Apellidos'].' '.$row['Localidad']; 
            }
        } else {
            echo "Usuario o contraseña incorrecta";
        }
        }      
?>