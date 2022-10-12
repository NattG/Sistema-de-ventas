<?php
    include("../vista/empleadoBusqueda.php");
    if(isset($_GET['Buscar'])){
        $nom=$_GET['nombre'];
        include("../modelo/empleadoClase.php");
        $emp=new Empleado("","","","","","","","","","","");
        $an=$emp->buscarEmpleado($nom);
        while($r=mysqli_fetch_array($an)){
            ?>
            <tr aling="center" valing="middle">
            <td><?php echo $r[11]; ?></td>
            <td><?php echo $r[2]; ?></td>
            <td><?php echo $r[3]." ".$r[4]." ".$r[5]; ?></td>
            <td><?php echo $r[6]; ?></td>
            <td><?php echo $r[7]; ?></td>
            <td><?php echo $r[8]; ?></td>
            <td><?php echo $r[9]; ?></td>
            <td><?php echo $r[10]; ?></td>
                <td><a href='empleadoModifica.php?cod=<?php echo $r[0];?>' class="btn btn-success">Modificar</a></td>
                <td><a href='empleadoElimina.php?cod=<?php echo $r[0];?>' class="btn btn-danger">Eliminar</a></td>
            </tr>
            <?php
        }
    }
?>

</table>
<br></br>
<center><h2><a href="empleadoLista.php">IR PRINCIPAL</a></h2></center>
<div>
    </form>
</div>
<div class="col-md-2"></div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>