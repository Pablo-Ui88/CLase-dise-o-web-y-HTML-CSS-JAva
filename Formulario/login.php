<?php
function limpiar($dato) {
    return htmlspecialchars(trim($dato));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = limpiar($_POST["user"] ?? '');
    $clave = limpiar($_POST["pass"] ?? '');

    $errores = [];

    // Validaciones
    if (empty($usuario)) {
        $errores[] = "El campo usuario es obligatorio.";
    } elseif (strlen($usuario) < 3) {
        $errores[] = "El usuario debe tener al menos 3 caracteres.";
    }

    if (empty($clave)) {
        $errores[] = "El campo contraseña es obligatorio.";
    } elseif (strlen($clave) < 6) {
        $errores[] = "La contraseña debe tener al menos 6 caracteres.";
    }

    // Mostrar errores o procesar login
    if (!empty($errores)) {
        echo "<h3>Errores:</h3><ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul><a href='../index.html'>Volver</a>";
    } else {
        // Aquí va la lógica real del login (ejemplo simulado):
        // Puedes reemplazar esto con una consulta a una base de datos
        if ($usuario === "admin" && $clave === "admin123") {
            echo "<h3>Bienvenido, $usuario</h3>";
        } else {
            echo "<h3>Usuario o contraseña incorrectos.</h3>";
            echo "<a href='../index.html'>Intentar de nuevo</a>";
        }
    }
} else {
    echo "Acceso denegado.";
}
?>