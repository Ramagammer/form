<?php
// Establece la conexión con la base de datos (ajusta los detalles según tu configuración)
$user = "root";
$pass = "";
$host = "localhost";

$conn = new mysqli($user, $pass, $host);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibe los datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

// Inserta los datos en la tabla
$sql = "INSERT INTO usuarios (nombre, telefono, email) VALUES ('$nombre', '$telefono', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Datos almacenados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];

    echo "Nombre: $nombre<br>";
    echo "Teléfono: $telefono<br>";
    echo "Email: $email<br>";
}

// Cierra la conexión
$conn->close();
?>




