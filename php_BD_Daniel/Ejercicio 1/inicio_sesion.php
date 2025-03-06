<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>
<body>
<h1>Iniciar sesión</h1>
    <form action="inicio_variable.php" method="post">
        Usuario: <input type="text" name="usuario" required><br>
        Contraseña: <input type="password" name="contraseña" required><br>
        <input type="submit" value="Iniciar sesión">
    </form>
    <a href="inicio.php">Volver a inicio</br></a>
</body>
</html>