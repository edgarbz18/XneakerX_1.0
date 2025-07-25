<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$marca = $_POST['marca'];
$imagen = $_FILES['imagen'];

// Directorio donde se guardarán las imágenes
$target_dir = "uploads/";
$target_file = $target_dir . basename($imagen["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Verificar que el archivo es una imagen
$check = getimagesize($imagen["tmp_name"]);
if($check !== false) {
    if (move_uploaded_file($imagen["tmp_name"], $target_file)) {
        $sql = "INSERT INTO productos (nombre, precio, marca, imagen) VALUES ('$nombre', '$precio', '$marca', '$target_file')";
        if ($conn->query($sql) === TRUE) {
            echo "Producto añadido correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error al subir la imagen.";
    }
} else {
    echo "El archivo no es una imagen.";
}

$conn->close();
?>
