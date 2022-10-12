<?php include("head.php");?>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../vista/principal.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../controlador/clienteRegistro.php">Nuevo Cliente</a></li>
            <li><a class="dropdown-item" href="../controlador/clienteLista.php">Listar Cliente</a></li>
            <li><a class="dropdown-item" href="../reportes/reporteCliente.php">Reporte Cliente</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cargo
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../controlador/cargoRegistro.php">Nuevo Cargo</a></li>
            <li><a class="dropdown-item" href="../controlador/cargoLista.php">Listar Cargo</a></li>
            <li><a class="dropdown-item" href="#">Reporte Cargo</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Proveedor
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../controlador/proveedorRegistro.php">Nuevo Proveedor</a></li>
            <li><a class="dropdown-item" href="../controlador/proveedorLista.php">Listar Proveedor</a></li>
            <li><a class="dropdown-item" href="#">Reporte Proveedor</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../controlador/usuarioRegistro.php">Nuevo Usuario</a></li>
            <li><a class="dropdown-item" href="../controlador/usuarioLista.php">Listar Usuario</a></li>
            <li><a class="dropdown-item" href="../controlador/usuarioListaIn.php">Listar Usuario Inactivo</a></li>
            <li><a class="dropdown-item" href="#">Reporte Usuario</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Empleado
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../controlador/empleadoRegistro.php">Nuevo Empleado</a></li>
            <li><a class="dropdown-item" href="../controlador/empleadoLista.php">Listar Empleado</a></li>
            <li><a class="dropdown-item" href="#">Reporte Empleado</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Producto
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../controlador/productoRegistro.php">Nuevo Producto</a></li>
            <li><a class="dropdown-item" href="../controlador/productoLista.php">Listar Producto</a></li>
            <li><a class="dropdown-item" href="#">Reporte Producto</a></li>
          </ul>
        </li>
 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ventas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../controlador/controladorventa.php">Nueva Venta</a></li>
            <li><a class="dropdown-item" href="#">Listar Ventas</a></li>
            <li><a class="dropdown-item" href="#">Reporte Ventas</a></li>
          </ul>
        </li>


      </ul>

    </div>
  </div>
</nav>
        <div class="container py-4">
            <h5 class="text-center">Bienvenidos al sistema de ventas La Casa Del Libro</h5>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>