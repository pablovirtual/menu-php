<?php
// Iniciar la sesión
session_start();

// Destruir la sesión
session_destroy();

// Redirigir a la página de inicio de sesión
header('Location: index.php');
exit();
?>