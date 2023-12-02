<?php
// Conexión a la base de datos (asegúrate de ajustar los valores)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mascotas";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$documento_identidad = $_FILES['identidad']['name']; // Asumiendo 'identidad' como el nombre del campo para el documento de identidad
$comprobante_ingresos = $_FILES['ingresos']['name']; // Asumiendo 'ingresos' como el nombre del campo para el comprobante de ingresos

// Preparar la consulta para insertar datos en la tabla 'adoptar'
$sql = "INSERT INTO adoptar (Nombre, Apellidos, Telefono, Direccion, Ciudad, Documento_identidad, Comprobante_ingresos) 
        VALUES ('$nombre', '$apellidos', '$telefono', '$direccion', '$ciudad', '$documento_identidad', '$comprobante_ingresos')";

if ($conn->query($sql) === TRUE) {
    // Mover los archivos a la ubicación deseada
    $target_dir = "archivosAdoptar/";
    move_uploaded_file($_FILES["identidad"]["tmp_name"], $target_dir . $_FILES["identidad"]["name"]);
    move_uploaded_file($_FILES["ingresos"]["tmp_name"], $target_dir . $_FILES["ingresos"]["name"]);

    echo "Datos almacenados correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
