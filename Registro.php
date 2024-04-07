<?php
// Configura tus credenciales de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Tienda";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Hashea la contraseña para mayor seguridad

    // Inserta los datos en la base de datos
    $sql = "INSERT INTO usuarios (NombreCompleto, Correo, Contraseña) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $email, $password);

    if ($stmt->execute()) {
        // Redirige después del registro exitoso (puedes cambiar la ubicación según tus necesidades)
        header("Location: index.php");
        exit();
    } else {
        echo "Error al registrar: " . $stmt->error;
    }

    // Cierra la conexión
    $stmt->close();
}

$conn->close();
?>