<?php
$servername = "localhost";
$username = "u875190719_edgar";
$password = "4AeSkBKbT=7";
$dbname = "u875190719_db";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);


// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>