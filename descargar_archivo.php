<?php
// Verifica si se proporcionó un ID válido a través de la URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conéctate a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mascotas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    // Consulta para obtener el nombre del archivo según el ID
    $sql = "SELECT foto FROM rescatar WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombreArchivo = $row['foto'];
        $rutaArchivo = 'archivos/' . $nombreArchivo;

        // Verifica si el archivo existe en el servidor
        if (file_exists($rutaArchivo)) {
            // Configura las cabeceras para enviar el archivo al navegador
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($rutaArchivo));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($rutaArchivo));
            ob_clean();
            flush();
            readfile($rutaArchivo);
            exit;
        } else {
            echo "El archivo no existe.";
        }
    } else {
        echo "ID de archivo no encontrado en la base de datos.";
    }

    $conn->close();
} else {
    echo "ID no proporcionado.";
}
?>
