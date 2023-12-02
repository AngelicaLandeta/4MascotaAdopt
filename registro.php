<?php
// Verifica si se reciben datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash de la contraseña (para mayor seguridad)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $database = "mascotas";

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password_db, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Definir el tipo por default (cliente)
    $tipo = 'cliente';

    // Preparar y ejecutar la consulta SQL
    $sql = "INSERT INTO usuarios (email, password, tipo) VALUES ('$email', '$password', '$tipo')";

    if ($conn->query($sql) === TRUE) {
        // Registro exitoso, redirecciona a la página de registro con un parámetro de éxito
        header("Location: register.php?registro=exitoso");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
