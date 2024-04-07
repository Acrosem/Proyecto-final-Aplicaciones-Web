<?php
session_start();
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu base de datos está en un servidor diferente
$username = "root";
$password = "";
$database = "Tienda";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verifica si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtiene los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Consulta SQL para verificar el inicio de sesión
$sql = "SELECT * FROM usuarios WHERE Correo = '$email' AND Contraseña = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Inicio de sesión exitoso, redirige a otra página
    $_SESSION['email'] = $email;
    header("Location: index.php");

    
} else {
    // Inicio de sesión fallido, muestra un mensaje de error
    echo "Inicio de sesión fallido. Verifica tu correo y contraseña.";
        

}
// Después de verificar las credenciales y autenticar al usuario


// Cierra la conexión a la base de datos
$conn->close();
?>
