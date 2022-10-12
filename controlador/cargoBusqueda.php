<?php
    include("../vista/cargoBusqueda.php");
    if(isset($_GET['Buscar'])){
        $ca=$_GET['cargo'];
        include("../modelo/cargoClase.php");
        $car=new Cargo("","");
        $an=$car->buscarCargo($ca);
        while($r=mysqli_fetch_array($an)){
            ?>
            <tr align="center" valign="middle">
                <td><?php echo $r['cargo'];?></td>
                <td><a href='cargoModifica.php?cid=<?php echo $r[0];?>' class="btn btn-success  bi bi-pencil-square"> Modificar</a></td>
                <td><a href='cargoElimina.php?cid=<?php echo $r[0];?>' class="btn btn-danger  bi bi-trash"> Eliminar</a></td>
            </tr>
            <?php
        }
    }
?>

</table>
<br></br>
<center><h2><a href="cargoLista.php">IR PRINCIPAL</a></h2></center>
<div>
    </form>
</div>
<div class="col-md-3"></div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
