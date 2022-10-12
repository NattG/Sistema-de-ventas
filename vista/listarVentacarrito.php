<div class="col-md-1"></div>
<div class="col-md-8">
    <?php
    while($r=mysqli_fetch_array($products)){
        $cont++;
        ?>
        <tr>
            <td><?php echo $cont; ?></td>
            <td><?php echo $r['titulo']; ?></td>
            <td><?php echo $c['cantidad']; ?></td>
            <td>Bs<?php echo $r['costoventa']; ?></td>
            <td>Bs<?php $t=$t+$c['cantidad']*$r['costoventa']; echo $c["cantidad"]*$r['costoventa']; ?></td>
            <td style="width: 260px">
            <?php
                $found=false;
                foreach ($_SESSION["carrito_ventas1"] as $c){
                    if($c["id_producto"]==$r["id_producto"]){
                        $found=true; break;
                    }
                }
            ?>
            <a href="controlaEliminaCarrito.php?id=<?php echo $c["id_producto"]; ?>" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        <?php
    }
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>