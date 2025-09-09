<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fragancias</title>
    <link rel="stylesheet" href="fragancias.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
      <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Seven and Seven SHOP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="../ticket.php">Ticket/Atención</a></li>
          <li class="dropdown nav-item">
            <a class="nav-link dropdown-toggle" href="tienda.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">TIENDA</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="bisuteria.html">Bisuteria</a></li>
              <li><a class="dropdown-item" href="fragancias.html">Fragancias</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="software.html">Software & Desarrollo Web</a></li>
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

<div class="main-layout">
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
    <div class="catalogo">
      <h2>Catalogo De Fragancias</h2>
      <div class="producto">
        <img src="../Catalogos/Fragancias/AsadLattafa.JPG" alt="Asad Lattafa">
        <h3>Asad Lattafa</h3>
        <p>Precio Original <i><strong>(Por encargo)</strong></i>: 120$</p>
        <p>Precio 1.1 : 110.000$</p>
        <p>Precio DobleA : 80.000$</p>
        <button class="btn1" onclick="agregarCarrito('Loción Aasad Lataffa', 110.000)">Agregar</button>
      </div>
      <hr>
      <div class="producto">
        <img src="../Catalogos/Fragancias/creedav.JPG" alt="Creed Absolut Adventus ">
        <h3>Creed Absolu Adventus</h3>
        <p>Precio Original <i><strong>(Por encargo)</strong></i>: 120$</p>
        <p>Precio 1.1 : 100.000$</p>
        <p>Precio DobleA : 80.000$</p>
        <button class="btn1" onclick="agregarCarrito('Creed Absolu Adventus', 100.000)">Agregar</button>
      </div>
      <hr>

      <div class="producto">
        <img src="../Catalogos/Fragancias/ch212men.jpg" alt="Carolina Herrera 212 Men NYC">
        <h3>212 Men - NYC</h3>
        <p>Precio Original <i><strong>(Por encargo)</strong></i>: 120$</p>
        <p>Precio 1.1 : 100.000$</p>
        <p>Precio DobleA : 80.000$</p>
        <button class="btn1" onclick="agregarCarrito('212 Men - NYC', 100.000)">Agregar</button>
      </div>
      <hr>
      <div class="producto">
        <img src="../Catalogos/Fragancias/360blackch.jpg" alt="360 Black CH">
        <h3>360 Black CH</h3>
        <p>Precio Original <i><strong>(Por encargo)</strong></i>: 120$</p>
        <p>Precio 1.1 : 100.000$</p>
        <p>Precio DobleA : 80.000$</p>
        <button class="btn1" onclick="agregarCarrito('360 Black CH', 100.000)">Agregar</button>
      </div>
      <hr>
      <div class="producto">
        <img src="../Catalogos/Fragancias/SwisArmy.jpg" alt="SwisArmy">
        <h3>SwisArmy</h3>
        <p>Precio Original <i><strong>(Por encargo)</strong></i>: 120$</p>
        <p>Precio 1.1 : 100.000$</p>
        <p>Precio DobleA : 80.000$</p>
        <button class="btn1" onclick="agregarCarrito('SwisArmy', 100.000)">Agregar</button>
      </div>
      <hr>
      <div class="producto">
        <img src="../Catalogos/Fragancias/hugoboss.jpg" alt="Hugo Boss ">
        <h3>Hugo Boss</h3>
        <p>Precio Original <i><strong>(Por encargo)</strong></i>: 120$</p>
        <p>Precio 1.1 : 100.000$</p>
        <p>Precio DobleA : 80.000$</p>
        <button class="btn1" onclick="agregarCarrito('Hugo Boss', 100.000)">Agregar</button>
      </div>
      <hr>
      <div class="producto">
        <img src="../Catalogos/Fragancias/santal33.WEBP" alt="Santal 33">
        <h3>Santal °33</h3>
        <p>Precio Original <i><strong>(Por encargo)</strong></i>: 120$</p>
        <p>Precio 1.1 : 100.000$</p>
        <p>Precio DobleA : 80.000$</p>
        <button class="btn1" onclick="agregarCarrito('Santal °33', 100.000)">Agregar</button>
      </div>
      <hr>
      <div class="carrito">
        <h2>Carrito de compras</h2>
        <ul id="listaCarrito"></ul>
        <p>Total: $<span id="total">0</span></p>
        <button class="btn btn-danger" onclick="vaciarCarrito()">Vaciar Carrito</button>
        <button class="btn btn-success" onclick="comprar()">Comprar</button>


      </div>

<script>
  let carrito = [];
  let total = 0;

function agregarCarrito(nombre, precio) {
  carrito.push({ nombre, precio });
  total += precio;

  let lista = document.getElementById("listaCarrito");
  let item = document.createElement("li");
  item.textContent = `${nombre} - $${precio}`;
  lista.appendChild(item);
}
  function vaciarCarrito() {
    carrito = [];
    total = 0;
    document.getElementById("listaCarrito").innerHTML = "";
    document.getElementById("total").textContent = total;
  }
  

  // Crear botón eliminar
function eliminarProducto(nombre) {
  let producto = carrito.find(p => p.nombre === nombre);
  if (producto) {
    total -= producto.precio;
    carrito = carrito.filter(p => p.nombre !== nombre);
    renderCarrito();
  }
}

function renderCarrito() {
  let lista = document.getElementById("listaCarrito");
  lista.innerHTML = "";
  carrito.forEach(prod => {
    let item = document.createElement("li");
    item.textContent = `${prod.nombre} - $${prod.precio}`;

    let btn = document.createElement("button");
    btn.textContent = "❌";
    btn.className = "btn btn-sm btn-danger ms-2";
    btn.onclick = () => eliminarProducto(prod.nombre);

    item.appendChild(btn);
    lista.appendChild(item);
  });
  document.getElementById("total").textContent = total;
}

function comprar() {
  if (carrito.length === 0) {
    alert("El carrito está vacío");
    return;
  }

  // Aquí puedes agregar la lógica para procesar la compra
  alert("Compra realizada con éxito");
  vaciarCarrito();
}

</script>


      </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>