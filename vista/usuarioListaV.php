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
            <h1>LISTA DE USUARIOS</h1>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scoope="col">Nombre Completo</th>
                        <th scoope="col">Usuario</th>
                        <th scoope="col">Nivel</th>
                        <th scoope="col" colspan="2">OPERACIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($r=mysqli_fetch_array($res)){
                    ?>
                        <div class="form-group">
                            <tr aling="center" valing="middle">
                            <td><?php echo $r[6]." ".$r[7]." ".$r[8]; ?></td>
                            <td><?php echo $r[1]; ?></td>
                            <td><?php 
                            if($r['nivel']==1){echo 'Administrador';}
                            else{echo 'Vendedor';}
                             ?></td>
                            <td><a href='usuarioModifica.php?cod=<?php echo $r[5];?>' class="btn btn-warning bi bi-pencil-square"> Modificar</a></td>    
                            <td><a href='usuarioElimina.php?cod=<?php echo $r[5];?>' class="btn btn-danger bi bi-trash"> Eliminar</a></td>    
                        <?php
                        }
                    ?>
                            </tr>
                        </div>
                    
                </tbody>
            </table>
            <table>
                <tr>
                    <td><a href="../controlador/usuarioRegistro.php" class="btn btn-primary bi bi-person-plus"> Nuevo Usuario</a></td>
                    <td><a href="../controlador/usuarioBusqueda.php" class="btn btn-success bi bi-search"> Buscar Usuario</a></td>
                    <td><a href="../reportes/reporteUsuario.php" class="btn btn-secondary bi bi-file-earmark-text"> Reporte </a></td>
                    <td><a href="../controlador/usuarioListaIn.php" class="btn btn-secondary "> Ver Usuarios Inactivos </a></td>
                    <td><a href="../index.php" class="btn btn-danger bi bi-door-open"> Salir</a></td>
                </tr>
            </table>
        </div>
        <div class="col-md-1"></div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>