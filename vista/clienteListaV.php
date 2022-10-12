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
            <h1>LISTA DE CLIENTES</h1>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scoope="col">Id Cliente</th>
                        <th scoope="col">Razon Social</th>
                        <th scoope="col">NIT / CI</th>
                        <th scoope="col" colspan="2">OPERACIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($reg=mysqli_fetch_array($res)){
                            echo "<tr>";
                            echo "<td>".$reg['idcliente']."</td>";
                            echo "<td>".$reg['razonsocial']."</td>";
                            echo "<td>".$reg['nit_ci']."</td>";
                            echo "<td><a href='../controlador/clienteElimina.php?cid=$reg[0]' class='btn btn-danger bi bi-trash'> Eliminar</a>";
                            echo "<td><a href='../controlador/clienteModifica.php?cod=$reg[0]' class='btn btn-warning bi bi-pencil-square'> Modificar</a>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <table>
                <tr>
                    <td><a href="../controlador/clienteRegistro.php" class="btn btn-primary bi bi-person-plus"> Nuevo Cliente</a></td>
                    <td><a href="../controlador/clienteBusqueda.php" class="btn btn-success bi bi-search"> Buscar Cliente</a></td>
                    <td><a href="../reportes/reporteCliente.php" class="btn btn-secondary bi bi-file-earmark-text"> Reporte Cliente</a></td>
                    <td><a href="../index.php" class="btn btn-danger bi bi-door-open"> Salir</a></td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>