<?php
session_start();
session_unset();
session_destroy();

// Redirigir a la página de inicio
header("Location: ../inicio.html");
exit();
?>