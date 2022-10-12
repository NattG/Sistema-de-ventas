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
        <div class="col-md-1"></div>
        <div class="col-md-10"><br>
            <h1>LISTA DE EMPLEADOS</h1>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scoope="col">Cargo</th>
                        <th scoope="col">Carnet</th>
                        <th scoope="col">Nombre Completo</th>
                        <th scoope="col">Direccion</th>
                        <th scoope="col">Telefono</th>
                        <th scoope="col">Fecha de Nacimiento</th>
                        <th scoope="col">Genero</th>
                        <th scoope="col">Intereses</th>
                        <th scoope="col" colspan="2">OPERACIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($r=mysqli_fetch_array($res)){
                    ?>
                        <div class="form-group">
                            <tr aling="center" valing="middle">
                            <td><?php echo $r[11]; ?></td>
                            <td><?php echo $r[2]; ?></td>
                            <td><?php echo $r[3]." ".$r[4]." ".$r[5]; ?></td>
                            <td><?php echo $r[6]; ?></td>
                            <td><?php echo $r[7]; ?></td>
                            <td><?php echo $r[8]; ?></td>
                            <td><?php echo $r[9]; ?></td>
                            <td><?php echo $r[10]; ?></td>
                            <td><a href='empleadoModifica.php?cod=<?php echo $r[0];?>' class="btn btn-warning bi bi-pencil-square"> Modificar</a></td>    
                            <td><a href='empleadoElimina.php?cod=<?php echo $r[0];?>' class="btn btn-danger bi bi-trash"> Eliminar</a></td>    
                        <?php
                        }
                    ?>
                            </tr>
                        </div>
                    
                </tbody>
            </table>
            <table>
                <tr>
                    <td><a href="../controlador/empleadoRegistro.php" class="btn btn-primary bi bi-person-plus"> Nuevo Empleado</a></td>
                    <td><a href="../controlador/empleadoBusqueda.php" class="btn btn-success bi bi-search"> Buscar Empleado</a></td>
                    <td><a href="../reportes/reporteEmpleado.php" class="btn btn-secondary bi bi-file-earmark-text"> Reporte Empleado</a></td>
                    <td><a href="../index.php" class="btn btn-danger bi bi-door-open"> Salir</a></td>
                </tr>
            </table>
        </div>
        <div class="col-md-1"></div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>