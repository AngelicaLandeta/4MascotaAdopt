<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
session_unset();
session_destroy();

// Redirige a la página de inicio o a donde desees que vaya después de cerrar sesión
header("Location: index.html");
exit;
?>
