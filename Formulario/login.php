<?php
function limpiar($dato) {
    return htmlspecialchars(trim($dato));
}
?>

<?php
session_start();

// Datos de prueba (deberían venir de una base de datos)
$usuario_valido = "admin";
$pass_valido = "1234";

// Recibir datos del formulario
$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';

if ($user === $usuario_valido && $pass === $pass_valido) {
    $_SESSION['usuario'] = $user;
    header("Location: ../dashboard.php"); // página protegida
    exit();
} else {
    echo "<p style='color:red;'>Usuario o contraseña incorrectos</p>";
    echo "<a href='../index.html'>Volver</a>";
}
?>