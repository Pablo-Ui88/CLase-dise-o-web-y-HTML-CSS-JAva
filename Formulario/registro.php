<?php
$conexion = new mysqli("localhost", "root", "", "registro-login");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO usuarios (usuario, email, password) VALUES ('$usuario', '$email', '$password')";

if ($conexion->query($sql) === TRUE) {
    // Redirigir a inicio.html
    header("Location: inicio.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>