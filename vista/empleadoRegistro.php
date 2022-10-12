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
        <h1>Registro Empleado</h1>
        <form method="post">
            <label for="">Cargo</label>
            <select name="cargo" id="cargo" class="form-control">
            <?php 
                while($reg=mysqli_fetch_array($res)){
                    ?>
                    <option value="<?php echo $reg['idcargo'];?>"> <?php echo $reg['cargo'];?> </option>
                    <?php
                }
            ?>
            </select>
            <label for="">CI:</label>
            <input type="text" class="form-control" name="cedula" id="cedula"/>
            <br> 
            <label for="">NOMBRE:</label>
            <input type="text" class="form-control" name="nombre" id="nombre"/>
            <br>
            <label for="">PATERNO:</label>
            <input type="text" class="form-control" name="paterno" id="paterno"/>
            <br> 
            <label for="">MATERNO:</label>
            <input type="text" class="form-control" name="materno" id="materno"/>
            <br>
            <label for="">DIRECCION:</label>
            <input type="text" class="form-control" name="direccion" id="direccion"/>
            <br> 
            <label for="">TELEFONO:</label>
            <input type="number" class="form-control" name="telefono" id="telefono"/>
            <br>
            <label for="">FECHA NACIMIENTO:</label>
            <input type="date" class="form-control" name="fecha" id="fecha"/>
            <br> 
            <label for="">SEXO:</label>
            <input type="radio" name="genero" id="genero" value="F">Femenino
            <input type="radio" name="genero" id="genero" value="M">Masculino
            <br>
            <label for="">INTERESES:</label>
            <input type="checkbox" name="intereses[]" id="intereses[]" value="Deportes">Deportes
            <input type="checkbox" name="intereses[]" id="intereses[]" value="Estudia">Estudia
            <input type="checkbox" name="intereses[]" id="intereses[]" value="Musica">Musica
            <br><br>
            <input type="submit" name="registrarEmpleado" value="Registrar Empleado" class="btn btn-primary"/>
            <a href="../controlador/empleadoLista.php" class="btn btn-success bi bi-file-x">Cancelar</a>
        </form>
    </div>
    <div class="col-md-2"></div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>