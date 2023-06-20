<?php
// Incluye el archivo de conexión a la base de datos
include("conexion.php");

// Verifica si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los valores del formulario
    $nombre = $_POST["txtname"];
    $apellido = $_POST["txtapellido"];
    $fecha = $_POST["txtFecha"];
    $email = $_POST["txtemail"];
    $adultos = $_POST["txtAdulto"];
    $menores = $_POST["txtMenor"];

    // Prepara la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO entradas(nombre, apellido, fecha, email, adulto, menor) VALUES ('$nombre', '$apellido', '$fecha', '$email', '$adultos', '$menores')";

    // Ejecuta la consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Los datos del boleto se han guardado correctamente.";
        echo "<script>showModal('¡Registro exitoso!');</script>";
    } else {
        echo "Error al guardar los datos del boleto: " . $conn->error;
    }
}

// Cierra la conexión a la base de datos
$conn->close();
?>
