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
    <form role="form" method="GET">
        <h1>Actualizar Usuario</h1>
            <?php
                $reg=mysqli_fetch_array($r);
            ?>
            <input class="form-control" type="hidden" name="cod" id="cod" value='<?=$reg[5];?>'></br>
        <div class="form-group">
            <label>Empleado</label>
            <input class="form-control" type="text" name="empleado" readonly value='<?=$reg['paterno'].' '.$reg['materno'].' '.$reg['nombre'] ;?>' >
        </div></br>
        <div class="form-group">
            <label>Usuario</label>
            <input class="form-control" type="text" name="usu" value='<?=$reg['usuario'] ;?>' >
        </div></br>
        <div class="form-group">
            <label>Nivel</label>
            <select name='nivel' class="form-control">
                <?php
                    if($reg['nivel']==1){
                        echo "<option value='1'>Administrador</option>";
                        echo "<option value='2'>Vendedor</option>";
                    }else{
                        echo "<option value='2'>Vendedor</option>";
                        echo "<option value='1'>Administrador</option>";
                    }
                ?>
            </select>
        </div></br>
        <div class="form-group">
            <label>Contraseña</label>
            <input class="form-control" type="password" name="pas1" >
        </div></br>
        <div class="form-group">
            <label>Repita Contraseña</label>
            <input class="form-control" type="password" name="pas2" >
        </div></br>
        <div class="form-group">
            <input type="submit" value="Actualizar" name="act" id="act" class="btn btn-primary">
            <a href="../controlador/usuarioLista.php" class="btn btn-success">Cancelar</a>
        </div>
        
    </form>
    </div>
    <div class="col-md-3"></div>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>