<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="estilos/registro.css">
    
</head>
<body>
<div class="reg">
    <h1>REGISTRO</h1>
    <form action="Formulario/registro.php" method="post">
        <label for="user">Usuario</label>
        <input type="text" id="user" name="user" required>

        <label for="email">Correo Electronico</label>
        <input type="text" id="email" name="email" required>

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
        <button type="button" onclick="togglePassword()">👁</button>

        <label for="confirm_password">Confirmar Contraseña</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <button type="button" onclick="togglePassword()">👁</button>

        <input type="submit" value="Registrarse">
    </form>
</div>

<script>
    function togglePassword() {
        const passwordField = document.getElementById("password");
        const confirmPasswordField = document.getElementById("confirm_password");
        const type = passwordField.type === "password" ? "text" : "password";
        passwordField.type = type;
        confirmPasswordField.type = type;
    }
</script>

</body>
</html>