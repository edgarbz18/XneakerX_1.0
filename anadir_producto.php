<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

// El código del formulario de añadir productos
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Producto</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/anadir_producto.css">
    <link rel="icon" href="images/x.ico" type="images/x-icon">
    <style>
        body {
            background-color: #f0f0f0;
            background-image: url('images/fondo_1.png');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Añadir Producto</h1>
    <form action="procesar_producto.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required><br>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br>

        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen" required><br>

        <button type="submit">Añadir Producto</button>
    </form>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
