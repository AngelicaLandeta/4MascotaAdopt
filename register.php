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
  <!-- jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
            <a class="nav-link text-white px-5" href="servicios_cliente.html">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white px-5" href="#contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white px-5" href="index.html">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white px-5" href="iniciosesion.html">Login</a>
          </li>

        </ul>
  </nav>

  <!--
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <div class="container-fluid justify-content-center">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="calculadora.html">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.html">Link</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="contenido.html">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="iniciosesion.html">Login</a>
      </li>
    </ul>
  </div>
</nav>
-->

<div class="container p-5 col-6 m-5 mx-auto ">
  <h2>Registro</h2>
  <form action="registro.php" method="POST" class="pb-3">
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


  <!-- Modal de Bootstrap para mostrar en caso de éxito -->
  <div class="modal fade" id="registroExitosoModal" tabindex="-1" role="dialog" aria-labelledby="registroExitosoModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="registroExitosoModalLabel">Registro Exitoso</h5>
                  
              </div>
              <div class="modal-body">
                  ¡Tu registro ha sido exitoso!
              </div>
              
          </div>
      </div>
  </div>

  <!-- Agrega los scripts de Bootstrap y jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

  <!-- Script personalizado para mostrar el modal después de un registro exitoso -->
  <?php
  if (isset($_GET['registro']) && $_GET['registro'] === 'exitoso') {
      echo '<script type="text/javascript">';
      echo '$(document).ready(function(){';
      echo '    $("#registroExitosoModal").modal("show");';
      echo '});';
      echo '</script>';
  }
  ?>
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