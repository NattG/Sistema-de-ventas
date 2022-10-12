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
    <div class="col-md-2"></div>
    <div class="col-md-8"><br>
        <h1>Registro Producto</h1>
        <form method="post" enctype="multipart/form-data">
            <label for="">Proveedor</label>
            <select name="prov" id="prov" class="form-control">
            <?php 
                while($reg=mysqli_fetch_array($res)){
                    ?>
                    <option value="<?php echo $reg['id_proveedor'];?>"> <?php echo $reg['empresa'];?> </option>
                    <?php
                }
            ?> 
            </select><br>
            <label for="">Titulo:</label>
            <input type="text" class="form-control" name="nom" id="nom"/>
            <br> 
            <label for="">Autor:</label>
            <input type="text" class="form-control" name="aut" id="aut"/>
            <br>
            <label for="">Clasificacion:</label>
            <input type="text" class="form-control" name="clas" id="clas"/>
            <br> 
            <label for="">Precio de Compra:</label>
            <input type="text" class="form-control" name="pco" id="pco"/>
            <br>
            <label for="">Precio de Venta:</label>
            <input type="text" class="form-control" name="pve" id="pve"/>
            <br> 
            <label for="">Stock:</label>
            <input type="number" class="form-control" name="sto" id="sto"/>
            <br>
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fec" id="fec"/>
            <br> 
            <label for="">Imagen:</label>
            <input type="file" name="log" id="log" value="Examinar" class="form-control"/>
            <br><br>
            <input type="submit" name="registrar" value="Registrar Producto" class="btn btn-primary"/>
            <a href="../controlador/productoLista.php" class="btn btn-success bi bi-file-x">Cancelar</a>
        </form>
    </div>
    <div class="col-md-2"></div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>