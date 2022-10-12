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
        <h1>Registro Usuario</h1>
        <form method="post" enctype="multipart/form-data">
        <label for="">Empleado</label>
            <select name="emp" id="emp" class="form-control">
            <?php 
                while($reg=mysqli_fetch_array($res)){
                    ?>
                    <option value="<?php echo $reg['id_empleado'];?>"> <?php echo $reg['nombre']." ".$reg['paterno']." ".$reg['materno'];?> </option>
                    <?php
                }
            ?>
            </select>

            <label for="">Usuario</label>
            <input type="text" class="form-control" name="usu" id="usu"/>
            </br>
            <label for="">Contraseña</label>
            <input type="password" class="form-control" name="con1" id="con1"/>
            </br>
            <label for="">Repita Contraseña</label>
            <input type="password" class="form-control" name="con2" id="con2"/>
            </br>
            <label for="">Nivel</label>
            <select name="niv" id="niv">
                <option value="1">Administrador</option>
                <option value="2">Vendedor</option>
            </select>
            </br></br>
            <input type="submit" name="registrar" value="Registrar Usuario" class="btn btn-primary"/>
            <a href="../controlador/usuarioLista.php" class="btn btn-danger bi bi-file-x">Cancelar</a>
        </form>
    </div>
    <div class="col-md-3"></div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>