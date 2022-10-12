<?php
    include("../vista/proveedorBusqueda.php");
    if(isset($_GET['Buscar'])){
        $ca=$_GET['empresa'];
        include("../modelo/proveedorClase.php");
        $prov=new Proveedor("","","","","","","");
        $an=$prov->buscarProveedor($ca);
        while($r=mysqli_fetch_array($an)){
            ?>
            <tr align="center" valign="middle">
                <td><?php echo $r[1]; ?></td>
                <td><?php echo $r[2]; ?></td>
                <td><?php echo $r[3]; ?></td>
                <td><?php echo $r[4]; ?></td>
                <td><?php echo $r[5]; ?></td>
                <td><img src="../controlador/imagenesproveedor/<?php echo $r[6]; ?>" alt="" width="50px" height="45px"></td>
                <td><a href='proveedorModifica.php?cid=<?php echo $r[0];?>' class="btn btn-success  bi bi-pencil-square"> Modificar</a></td>
                <td><a href='proveedorElimina.php?cid=<?php echo $r[0];?>' class="btn btn-danger  bi bi-trash"> Eliminar</a></td>
            </tr>
            <?php
        }
    }
?>

</table>
<br></br>
<center><h2><a href="proveedorLista.php">IR PRINCIPAL</a></h2></center>
<div>
    </form>
</div>
<div class="col-md-2"></div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
