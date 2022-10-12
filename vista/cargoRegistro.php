<?php 
 include("head.php");
 if($_SESSION['nivel']==1){
    include("encabezado.php");
 }else{
    if($_SESSION['nivel']==2){
        include("encabezado2.php");
     }
 }
?>     
<body>
    <div class="row">
    <div class="col-md-3"></div><br>
    <div class="col-md-6">
        <h1>Registro Cargo</h1>
        <form method="post">
            <label for="">Cargo</label>
            <input type="text" class="form-control" name="cargo" id="cargo"/>
            </br>
            <input type="submit" name="registrarCargo" value="Registrar Cargo" class="btn btn-primary"/>
            <a href="../controlador/cargoLista.php" class="btn btn-success bi bi-file-x">Cancelar</a>
        </form>
    </div>
    <div class="col-md-3"></div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>