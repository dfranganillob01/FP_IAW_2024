<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar interpretacion por codigo obra</title>
</head>
<body>
    <form method="post">
        Codigo_Obra: <input type="text" name="codigo" required><br>
        <input type="submit" value="Consultar">
    </form>
    <a href="inicio3.html">Volver a inicio</br></a>
    <?php
        include 'BD3.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $codigo = $_POST['codigo'];
            
            function consultar_codigo_obra($conn,$codigo) {
                $sql = "SELECT * FROM Interpretacion WHERE codigo_obra='$codigo';";
                $resultado = mysqli_query($conn,$sql);
                $comprobación = mysqli_num_rows($resultado);
                if ($comprobación > 0) {
                    $row=mysqli_fetch_array($resultado);
                    echo "Id: ".$row["id"]." Codigo_obra: ".$row["codigo_obra"]." Codigo_instrumento: ".$row["codigo_instrumento"]." Fecha: ".$row["fecha"];
                } else {
                    echo "Codigo no registrado en la base de datos";
                }
            }
            consultar_codigo_obra($conn,$codigo);
        }
    ?>
</body>
</html>