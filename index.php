<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seven And Seven SHOP</title>
  <link rel="stylesheet" href="estilos/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Seven and Seven SHOP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="ticket.php">Ticket/Atención</a></li>
          <li class="dropdown nav-item">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">TIENDA</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" target="_blank" href="Tienda/bisuteria.php">Bisuteria</a></li>
              <li><a class="dropdown-item" target="_blank" href="Tienda/fragancias.php">Fragancias</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" target="_blank" href="Tienda/software.php">Software & Desarrollo Web</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Botón de ticket -->
  <div class="contenedor-boton">
  <button class="boton-primario" type="button" onclick="solicitarTicket()">Solicitar ticket de atención</button>
  </div>

  <!-- Script para el botón de ticket -->
  <script>
    function solicitarTicket() {
      alert('Ticket solicitado en breve serás atendido ✅');
    }
  </script>

  <!-- Layout principal -->
  <div class="main-layout">
    <!-- Contenido -->
    <div class="contenido">
      <h1>Desarrollo web</h1>
      <p>
        La página web presentada es un prototipo diseñado para transmitir profesionalismo y modernidad en el área de desarrollo web.
      </p>
      <p>
        Se emplea una paleta cromática en tonos morados y beige, donde el morado representa creatividad, innovación y tecnología, mientras que el beige aporta claridad y neutralidad, facilitando la lectura y generando confianza visual.
      </p>

      <h2>PRECIOS</h2>
      <p>
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusantium consequatur assumenda molestiae ratione, ullam laboriosam, aliquam et deleniti.
      </p>
    </div>

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

   

  <!-- Footer -->
  <footer class="footi">
    <p>
      &copy; 2024 Seven And Seven SHOP. Todos los derechos reservados.
    </p>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>