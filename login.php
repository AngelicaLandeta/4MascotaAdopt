<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $database = "mascotas";

    // Establecer la conexión
    $conn = new mysqli($servername, $username, $password_db, $database);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email']; // Establece el email del usuario en la sesión

        if ($row['tipo'] == 'cliente') {
            header("Location: servicios_cliente.php"); // Redirige al administrador a servicios.ph
            exit;
        } else if ($row['tipo'] == 'admin') {
            header("Location: servicios.php");
            exit; 
        }
    } else {
        echo "Credenciales incorrectas. Vuelve a intentarlo.";
    }

    

    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="../img/corazon_sano.png">
  <title>Inicio Sesión</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="scss/style.css">
  <!--
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
-->
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-navbar">
    <div class="container-fluid ">
      <a class="navbar-brand px-5" href="index.html"><img src="img/logo.png" alt="logo" height="45" width="100"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item ">
            <a class="nav-link active text-white px-5" aria-current="page" href="index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white px-5" href="servicios.html">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white px-5" href="#contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white px-5" href="#nosotros">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white px-5" href="iniciosesion.html">Login</a>
          </li>

        </ul>
  </nav>



<div class="container p-5 col-6 m-5 mx-auto">
    <h2>Registro</h2>
    <form action="login.php" method="POST" class="pb-3">
        
        <!-- Agrega los demás campos como Apellidos, Email, Contraseña, etc. -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group pb-3">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
    <a href="iniciosesion.html"><button type="submit" class="btn btn-primary">Regresar</button></a>

    <?php if(!empty($mensaje)) { ?>
        <div class="mt-3 alert alert-<?php echo ($mensaje == "Registro exitoso. Ahora puedes iniciar sesión.") ? 'success' : 'danger'; ?>" role="alert">
            <?php echo $mensaje; ?>
        </div>
    <?php } ?>
</div>




  
  <footer>
    <!-- Wrapper container -->
    <div class="container py-4  ">

      <!-- Bootstrap 5 starter form -->
      <form id="contactForm" class="col-4 py-5 pr-5 pl-1" data-sb-form-api-token="API_TOKEN">

        <div class="pb-4" id="contacto">
          <h4 class="text-white">Contacto</h4>
        </div>



        <!-- Email address input -->
        <div class="mb-3">

          <input class="form-control" id="emailAddress" type="email" placeholder="Email Address"
            data-sb-validations="required, email" />
          <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
          <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
        </div>

        <!-- Form submissions success message -->
        <div class="d-none" id="submitSuccessMessage">
          <div class="text-center mb-3">Form submission successful!</div>
        </div>

        <!-- Form submissions error message -->
        <div class="d-none" id="submitErrorMessage">
          <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>

        <!-- Form submit button -->
        <div class="d-grid">
          <button class="btn btn-lg  button-send" id="submitButton" type="submit">Submit</button>
        </div>

      </form>

    </div>

    <div class="p-2">
      <p class="text-center text-white">Todos los derechos reservados 2023</p>
    </div>



  </footer>






</body>

</html>