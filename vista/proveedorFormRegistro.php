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
        <h1>Registro Proveedor</h1>
        <form method="post" enctype="multipart/form-data">
            <label for="">Empresa</label>
            <input type="text" class="form-control" name="emp" id="emp"/>
            </br>
            <label for="">Contacto</label>
            <input type="text" class="form-control" name="con" id="con"/>
            </br>
            <label for="">E-mail</label>
            <input type="email" class="form-control" name="ema" id="ema"/>
            </br>
            <label for="">Telefono</label>
            <input type="number" class="form-control" name="tel" id="tel"/>
            </br>
            <label for="">Direccion</label>
            <input type="text" class="form-control" name="dir" id="dir"/>
            </br>
            <label for="">Logo</label>
            <input type="file" name="log" id="log" value="Examinar" class="form-control"/>
            </br>
            <input type="submit" name="registrar" value="Registrar Proveedor" class="btn btn-primary"/>
            <a href="../controlador/proveedorLista.php" class="btn btn-success bi bi-file-x">Cancelar</a>
        </form>
    </div>
    <div class="col-md-3"></div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>