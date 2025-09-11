<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  <title>Seven&SevenSHOP</title>
  <style>
  body {
  background-color: #000000;
  color: #ffffff;
    /* background-image: url("2v.gif"); /* ruta de la imagen */
  /*background-size: cover;  /* ajusta la imagen a toda la pantalla */
  /*background-position: center; /* centra la imagen */
  /*background-attachment: fixed; /* efecto parallax, la imagen no se mueve */
  /*background-repeat: no-repeat; /* evita que se repita */
}
.btn-link {
  color: #6a0dad;
  background: transparent;
  border: none;
  cursor: pointer;
  font-size: 16px;
  text-decoration: underline;
}
/* Formulario a la derecha */
.log {
  position: absolute;
  width: 300px;
  flex: 1;
  background-color: #ffffffff;
  color:black;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 4px 12px rgba(0,0,0,0.15);
}
.log form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.log label {
  font-weight: bold;
}
.log input[type="text"]{
  padding: 8px;
  border: 1px solid #aaa;
  border-radius: 5px;
}
.log input[type="password"] {
  padding: 8px;
  border: 1px solid #aaa;
  border-radius: 5px;
}
.log input[type="submit"],
.log input[type="reset"] {
  background-color: #000000;
  color: #ffffffff;
  border: none;
  padding: 10px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in;
}
.log input[type="submit"]:hover,
.log input[type="reset"]:hover {
  background-color:  white;
  color:black;
  box-shadow: 0px 4px 12px rgba(0,0,0,0.2);

}
.log a {
  font-size: 0.9rem;
  color: black;
  text-decoration: none;
}
.log a:hover {
  text-decoration: underline;
}


  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
<div class="main-layout">
  <canvas id="fondo"></canvas>
<script>
const canvas = document.getElementById("fondo");
const ctx = canvas.getContext("2d");

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const nodos = [];
for (let i = 0; i < 50; i++) {
  nodos.push({
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    dx: (Math.random() - 0.5) * 2,
    dy: (Math.random() - 0.5) * 2
  });
}

function animar() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  for (let nodo of nodos) {
    ctx.beginPath();
    ctx.arc(nodo.x, nodo.y, 3, 0, Math.PI * 2);
    ctx.fillStyle = "white";
    ctx.fill();

    nodo.x += nodo.dx;
    nodo.y += nodo.dy;

    if (nodo.x < 0 || nodo.x > canvas.width) nodo.dx *= -1;
    if (nodo.y < 0 || nodo.y > canvas.height) nodo.dy *= -1;
  }
  requestAnimationFrame(animar);
}
animar();
</script>

  <h1>Bienvenido a Seven&SevenSHOP</h1>
   <!-- Formulario -->
  <div class="log">
    <form action="Formulario/login.php" method="POST">
      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="usuario">

      <label for="pass">Contraseña</label>
      <input type="password" id="pass" name="password">

      <input type="submit" value="Iniciar Sesión">
      <input type="reset" value="Limpiar">

      <a href="registro.php">Registrarse</a>
      <a href="Components/olvidar.php">¿Olvidaste tu contraseña?</a>
    </form>
  </div>
</div>


  
</body>
</html>