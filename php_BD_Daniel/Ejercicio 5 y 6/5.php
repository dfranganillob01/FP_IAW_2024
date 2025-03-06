<?php
    include 'BD3.php';

    function mostrar_todo($conn) {
        $sql = "SELECT * FROM instrumento;";
        $resultado = mysqli_query($conn,$sql);
        $comprobacion = mysqli_num_rows($resultado);
        if ($comprobacion > 0) {
            $row=mysqli_fetch_array($resultado);
            echo "Codigo: ".$row["Codigo"]." Nombre: ".$row["Nombre"]." Tipo: ".$row["Tipo"]." Origen: ".$row["Origen"]." Modelo: ".$row["Modelo"]."</br>";
            echo "</br><a href='inicio3.html'>Volver</a>";
        } else {
            echo "No hay datos en instrumentos";
        }
    }
    mostrar_todo($conn);
?>