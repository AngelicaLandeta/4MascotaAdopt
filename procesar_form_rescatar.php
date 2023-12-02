<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mascotas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $direccionRescatar = $_POST['direccion'];
    $fotoRescatar = $_FILES['foto']['name'];

    $sqlRescatar = "INSERT INTO rescatar (direccion, foto) VALUES ('$direccionRescatar', '$fotoRescatar')";

    if ($conn->query($sqlRescatar) === TRUE) {
        $target_dirRescatar = "archivos/";
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dirRescatar . $_FILES["foto"]["name"]);

        echo "¡Registro de rescate exitoso!";
    } else {
        echo "Error: " . $sqlRescatar . "<br>" . $conn->error;
    }

    $conn->close();
}
?>




