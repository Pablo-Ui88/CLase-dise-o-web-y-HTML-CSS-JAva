<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bisuteria</title>
    <link rel="stylesheet" href="bisuteria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
      <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" >Seven and Seven SHOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php" >Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="../ticket.php" >Ticket/Atención</a></li>
        <li class="dropdown nav-item">
          <a class="nav-link dropdown-toggle" href="#"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">TIENDA</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#" >Bisuteria</a></li>
            <li><a class="dropdown-item" href="fragancias.php" >Fragancias</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="software.php" >Software & Desarrollo Web</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link disabled" href="#"  tabindex="-1" aria-disabled="true">Disabled</a></li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>


    <?php if (isset($_SESSION['usuario_nombre'])): ?>
        <div class="user-panel">
            <h2>👋 Hola, <?php echo $_SESSION['usuario_nombre']; ?></h2>
            <p>Bienvenido a tu panel de usuario.</p>
            <a href="Formulario/logout.php">Cerrar sesión</a>
        </div>
    <?php else: ?>
        <div class="user-panel">
            <h2>👤 No has iniciado sesión</h2>
            <a href="inicio.php">Iniciar sesión</a>
        </div>
    <?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>