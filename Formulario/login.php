<?php
session_start(); // 👈 Siempre al inicio

$conexion = new mysqli("localhost", "root", "", "registro-login");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $pass = $_POST['password'];

    // Buscar usuario
    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();

        // Verificar la contraseña encriptada
        if (password_verify($pass, $row['password'])) {
            // ✅ Iniciar sesión
            $_SESSION['usuario_id'] = $row['id'];
            $_SESSION['usuario_nombre'] = $row['usuario'];

            // Redirigir a página protegida
            header("Location: ../index.php");
            exit();
        } else {
            echo "❌ Contraseña incorrecta";
        }
    } else {
        echo "❌ Usuario no encontrado";
    }
}
?>

