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
            <h1>LISTA DE PROVEEDORES</h1>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scoope="col">Empresa</th>
                        <th scoope="col">Contacto</th>
                        <th scoope="col">Email</th>
                        <th scoope="col">Telefono</th>
                        <th scoope="col">Direccion</th>
                        <th scoope="col">Logo</th>
                        <th scoope="col" colspan="2">OPERACIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($r=mysqli_fetch_array($r1)){
                    ?>
                        <div class="form-group">
                            <tr aling="center" valing="middle">
                            <td><?php echo $r[1]; ?></td>
                            <td><?php echo $r[2]; ?></td>
                            <td><?php echo $r[3]; ?></td>
                            <td><?php echo $r[4]; ?></td>
                            <td><?php echo $r[5]; ?></td>
                            <td><img src="../controlador/imagenesproveedor/<?php echo $r[6]; ?>" alt="" width="50px" height="45px"></td>
                            <td><a href='proveedorModifica.php?cid=<?php echo $r[0];?>' class="btn btn-warning bi bi-pencil-square"> Modificar</a></td>    
                            <td><a href='proveedorElimina.php?cid=<?php echo $r[0];?>' class="btn btn-danger bi bi-trash"> Eliminar</a></td>    
                        <?php
                        }
                    ?>
                            </tr>
                        </div>
                    
                </tbody>
            </table>
            <table>
                <tr>
                    <td><a href="../controlador/proveedorRegistro.php" class="btn btn-primary bi bi-person-plus"> Nuevo Proveedor</a></td>
                    <td><a href="../controlador/proveedorBusqueda.php" class="btn btn-success bi bi-search"> Buscar Proveedor</a></td>
                    <td><a href="../reportes/reporteProveedor.php" class="btn btn-secondary bi bi-file-earmark-text"> Reporte Proveedor</a></td>
                    <td><a href="../index.php" class="btn btn-danger bi bi-door-open"> Salir</a></td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>