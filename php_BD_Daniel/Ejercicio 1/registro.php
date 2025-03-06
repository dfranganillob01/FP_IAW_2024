<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de usuario</h1>
    <form action="registro_variables.php" method="post">
        DNI: <input type="text" name="dni" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        Apellidos: <input type="text" name="apellidos" required><br>
        Localidad: <input type="text" name="localidad"><br>
        Centro de estudios: <input type="text" name="centro_de_estudios"><br>
        Usuario: <input type="text" name="usuario" required><br>
        Contraseña: <input type="password" name="contraseña" required><br>
        <input type="submit" value="Registrarse">
    </form>
    <a href="inicio.php">Volver a inicio</br></a>
</body>
</html>