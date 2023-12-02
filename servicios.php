<?php
session_start();

// Verificar si el usuario no está autenticado
if (!isset($_SESSION['email'])) {
    header("Location: iniciosesion.html"); // Redirige a la página de inicio de sesión si no está autenticado
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="scss/style.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-navbar">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo" height="45" width="100"></a>
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
                        <a class="nav-link text-white px-5" href="servicios.php">Servicios</a>
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
                     <li class="nav-item">
						<a class="nav-link text-white px-5" href="cerrar_sesion.php">Salir</a>
					 </li>

                </ul>
            </div>
        </div>
    </nav>



    <div class="px-5 mx-5">
        <div class="cards-wrapper p-5 m-5">

            <div class="card m-4 col-12 col-md-3">
                <img src="img/donar.png" class="card-img-top" alt="Donar" width="300" height="300">
                <div class="card-body text-center">
                    <h5 class="card-title text-center">Donar</h5>
                    <a href="donar.html" class="btn btn-sm btn-primary text-center">Vamos</a>
                </div>
            </div>

            <div class="card m-4 col-12 col-md-3">
                <img src="img/rescatar.png" class="card-img-top" alt="Rescatar" width="300" height="300">
                <div class="card-body text-center">
                    <h5 class="card-title text-center">Rescatar</h5>
                    <a href="rescatar.html" class="btn btn-sm btn-primary text-center">Vamos</a>
                </div>
            </div>

            <div class="card m-4 col-12 col-md-3">
                <img src="img/adoptar.png" class="card-img-top" alt="Adoptar" width="300" height="300">
                <div class="card-body text-center">
                    <h5 class="card-title text-center">Adoptar</h5>
                    <a href="adoptar.html" class="btn btn-sm btn-primary text-center">Vamos</a>
                </div>
            </div>

            <div class="card m-4 col-12 col-md-3 ">
                <img src="img/reporte.png" class="card-img-top" alt="Reporte" width="300" height="300">
                <div class="card-body text-center">
                    <h5 class="card-title text-center">Reporte</h5>
                    <a href="reporte.php" class="btn btn-sm btn-primary text-center">Vamos</a>
                </div>
            </div>


        </div>



    </div>
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
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.
                    </div>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not
                        valid.</div>
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
