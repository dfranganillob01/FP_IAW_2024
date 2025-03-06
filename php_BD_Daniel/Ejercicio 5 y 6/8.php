<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar instrumento origen</title>
</head>
<body>
    <form method="post">
        Origen: <input type="text" name="origen" required><br>
        <input type="submit" value="Consultar">
    </form>
    <a href="inicio3.html">Volver a inicio</br></a>
    <?php
        include 'BD3.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $origen = $_POST['origen'];
            
            function consultar_codigo($conn,$origen) {
                $sql = "SELECT * FROM instrumento WHERE Origen='$origen';";
                $resultado = mysqli_query($conn,$sql);
                $comprobación = mysqli_num_rows($resultado);
                if ($comprobación > 0) {
                    $row=mysqli_fetch_array($resultado);
                    echo "Codigo: ".$row["Codigo"]." Nombre: ".$row["Nombre"]." Tipo: ".$row["Tipo"]." Origen: ".$row["Origen"]." Modelo: ".$row["Modelo"]."</br>";
                } else {
                    echo "Origen no registrado en la base de datos";
                }
            }
            consultar_codigo($conn,$origen);
        }
    ?>
</body>
</html>