<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe los datos del formulario
    $nombre = $_POST['nombre'];
    $pais = $_POST['pais'];
    $correo = $_POST['correo'];

    // Conecta a la base de datos (ajusta los valores de conexión según tu configuración)
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'mascotas';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Error de conexión: ' . $conn->connect_error);
    }

    // Inserta los datos en la base de datos
    $sql = "INSERT INTO donaciones (nombre, pais, correo) VALUES ('$nombre', '$pais', '$correo')";

    if ($conn->query($sql) === TRUE) {
        echo 'Datos guardados con éxito';
    } else {
        echo 'Error al guardar los datos: ' . $conn->error;
    }
    

    $conn->close();
}
?>

