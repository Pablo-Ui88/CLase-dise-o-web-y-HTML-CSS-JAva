<?php
session_start();
$conexion = new mysqli("localhost", "root", "", "registro-login");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $usuario  = trim($_POST['usuario']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    // Validar que no estén vacíos
    if (empty($usuario) || empty($email) || empty($password)) {
        echo "❌ Todos los campos son obligatorios.";
        exit();
    }

    // Encriptar contraseña
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // 🔎 Verificar si ya existe el usuario o el email
    $check = $conexion->prepare("SELECT id FROM usuarios WHERE usuario = ? OR email = ?");
    $check->bind_param("ss", $usuario, $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "❌ El usuario o el correo ya están registrados. Intenta con otros.";
        exit();
    }

    // ✅ Insertar nuevo usuario
    $sql = "INSERT INTO usuarios (usuario, email, password) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $usuario, $email, $passwordHash);

    if ($stmt->execute()) {
        echo "✅ Usuario registrado con éxito";
        // Redirigir a inicio
        header("Location: ../inicio.php");
        exit();
    } else {
        echo "❌ Error al registrar: " . $stmt->error;
    }
}
?>