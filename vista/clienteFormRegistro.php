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
    <div class="row pb-4">
    <div class="col-md-3"></div>
    <div class="col-md-6"><br>
        <h1>Registro Cliente</h1>
        <form method="post">
            <label for="">Razon Social</label>
            <input type="text" class="form-control" name="rs" id="rs"/>
            </br>
            <label for="">Nit o Carnet</label>
            <input type="text" class="form-control" name="ni" id="ni"/>
            </br>
            <input type="submit" name="registrarCliente" value="Registrar" class="btn btn-primary"/>
            <a href="../controlador/clienteLista.php" class="btn btn-success bi bi-file-x">Cancelar</a>
        </form>
    </div>
    <div class="col-md-3"></div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>