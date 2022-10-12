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
<div class="col-md-1"></div>

    <div class="panel panel-primary py-3 px-5">
        <div class="panel-heading">
            <a href="../controlador/controlaventaCarrito.php" class="btn btn-primary btn-lg">
            <i class="bi bi-cart4"></i>Ver Carrito
            </a>
        </div>
        <br>
        <table class="table table-bordered">
            <thead>
                <th>#</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Cantidad</th>
                <th></th>
            </thead>
        <div class="panel-body">
            <?php
                while($r=mysqli_fetch_array($res)){
                    ?>
                    <tr>
                        <td> <?php echo $r['id_producto']; ?> </td>
                        <td> <?php echo $r['titulo']; ?> </td>
                        <td> <?php echo $r['costoventa']; ?> </td>
                        <td> <?php echo $r['stock']; ?> </td>
                    <?php
                        $estado=false;
                        if(isset($_SESSION["carrito_ventas1"])){
                            foreach($_SESSION["carrito_ventas1"] as $c){
                                if($c['id_producto']==$r['id_producto']){
                                    $estado=true;
                                    break;
                                }
                            }
                        }
                        if($estado):
                            ?> 
                            <td>
                                <a href="controlaventacarrito.php" class="btn btn-success">Agregado</a>
                            </td>
                            <?php
                            else:
                                if($r['stock']!=0){
                                    ?>
                                    <form method="post" action="../controlador/controlaAdicionCarrito.php">
                                        <input type="hidden" name="id_producto" value="<?php echo $r['id_producto']; ?>">
                                        <td>
                                            Cantidad:
                                            <input type="number" name="cantidad" value="1" min="1" max=<?php echo $r['stock'];?>>
                                        </td>
                                        <td><button type="submit" class="btn btn-primary">Agregar</button></td>
                                    </form>
                                    <?php
                                }else{
                                    ?>
                                    <td>
                                        Cantidad:
                                        <input type="number" name="cantidad" value="0" readonly>
                                    </td>
                                    <td><button type="submit" class="btn btn-danger">Agotado</button></td>
                                    <?php
                                }
                            endif;
                            ?>   
                    </tr>
                    <?php
                }
            ?>
        </div>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>