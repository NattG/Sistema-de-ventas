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
        <div class="col-md-2"></div>
        <div class="col-md-8"><br>
            <h1>LISTA DE CARGOS</h1>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scoope="col">Cargo</th>
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
                            <td><a href='cargoModifica.php?cid=<?php echo $r[0];?>' class="btn btn-warning bi bi-pencil-square"> Modificar</a></td>    
                            <td><a href='cargoElimina.php?cid=<?php echo $r[0];?>' class="btn btn-danger bi bi-trash"> Eliminar</a></td>    
                        <?php
                        }
                    ?>
                            </tr>
                        </div>
                    
                </tbody>
            </table>
            <table>
                <tr>
                    <td><a href="../controlador/cargoRegistro.php" class="btn btn-primary bi bi-person-plus"> Nuevo Cargo</a></td>
                    <td><a href="../controlador/cargoBusqueda.php" class="btn btn-success bi bi-search"> Buscar Cargo</a></td>
                    <td><a href="../reportes/reporteCargo.php" class="btn btn-secondary bi bi-file-earmark-text"> Reporte Cargo</a></td>
                    <td><a href="../index.php" class="btn btn-danger bi bi-door-open"> Salir</a></td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>