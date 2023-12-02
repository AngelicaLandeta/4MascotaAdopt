<?php
session_start();

function verificarSesionAdmin() {
    if (!isset($_SESSION['email']) || $_SESSION['tipo'] !== 'admin') {
        header("Location: index.html"); // Redirige si no es administrador o no hay sesión activa
        exit;
    }
}
?>
