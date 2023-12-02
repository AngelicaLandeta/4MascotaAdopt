<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mascotas';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

$sql = "SELECT * FROM donaciones";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $datos = array();
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
    echo json_encode($datos);
} else {
    echo 'No se encontraron datos.';
}

$conn->close();
?>
