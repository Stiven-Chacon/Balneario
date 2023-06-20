<?php
$servername = "localhost"; // Cambia esto si tu servidor de MySQL no está en localhost
$username = "user"; // Reemplaza con tu nombre de usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL
$database = "balneario"; // Reemplaza con el nombre de tu base de datos

// Crea una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verifica si hay algún error en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>