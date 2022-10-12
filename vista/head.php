<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sa384-gH2yIJqKdNHPEq0n4hMqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Principal</title>
  </head>    
<body>
<div class="container-fluid header pb-4">
      <div class="row">
        <div class="col-6">
          <a href="../controlador/principal.php" class="title" >Sistema de ventas La Casa del Libro</a>
        </div>
        <div class="col search ps-5">
          <form class="d-flex" role="search">
            <input
              class="form-control me-2 "
              type="search"
              placeholder="Buscar"
              aria-label="Search"
            />
            <button class="btn btn-primary" type="submit">Buscar</button>
          </form>
        </div>
        <div class="col text-center">
        <p class="py-2 usr">
          <?php include("../controlador/seguridad.php"); ?>
                        <?php echo "<font color='black'>".$_SESSION['nombre']."</font>"; ?>
                        <a href="../controlador/salir.php" class="usr">(SALIR)</a>
          </p>
        </div>
      </div>
    </div><!--.Container-->

    

