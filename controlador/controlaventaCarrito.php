<?php 
 include("../vista/head.php");
 if($_SESSION['nivel']==1){
    include("../vista/encabezado.php");
 }else{
    if($_SESSION['nivel']==2){
        include("../vista/encabezado2.php");
     }
 }
?>  
<div class="col-md-1"></div>
<div class="col-md-8 px-5 py-3">
    <h1>PRODUCTOS SELECCIONADOS</h1>
    <a href="controladorventa.php" class="btn btn-success">VER PRODUCTOS</a>
    <br><br>
    <?php

    $t=0;
    if(isset($_SESSION["carrito_ventas1"])&& !empty($_SESSION["carrito_ventas1"])):?>
    <table class="table table-bordered">
            <thead>
                <th>#</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
                <th></th>
                <br><br>
            </thead>
            <?php
            $cont=0;
            require("../modelo/productoClase.php");
            $car=new Producto("","","","","","","","","","");
            $car->conexionVenta();
            foreach ($_SESSION["carrito_ventas1"] as $c):
                $products=$car->listarProductoId2($c['id_producto']);
                include("../vista/listarVentacarrito.php");
            endforeach;
            ?>
    </table>
    <div class="col-md-15 centro">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <span class="btn btn-default form-control campo">Total</span>
                    </td>
                    <td class="campo">
                        <?php
                        echo 'Bs.'.$t;
                        ?>
                    </td>
                    <form class="form-horizontal" method="post" action="controladorClienteVenta.php">
                        <div class="form-inline izquierda">
                            <div class="col-md-15">
                                <input type="hidden" name="total" value="<?php echo($t); ?>">
                                <button type="submit" class="btn btn-primary btn-lg from derecha">PROCESAR VENTA</button>
                            </div>
                        </div>
                    </form>
                <?php else: ?>
                    <p class="alert alert-warning">No hay producto seleccionado</p>
                <?php endif; ?>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>