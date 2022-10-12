<?php
    include("../vista/clienteBusqueda.php");
    if(isset($_GET['Buscar'])){
        $ni=$_GET['nit'];
        include("../modelo/clienteClase.php");
        $cli=new Cliente("","","","");
        $an=$cli->buscarCliente($ni);
        while($r=mysqli_fetch_array($an)){
            ?>
            <tr aling="center" valing="middle">
                <td><?php echo $r['razonsocial'];?></td>
                <td><?php echo $r['nit_ci'];?></td>
                <td><a href='clienteModifica.php?cod=<?php echo $r[0];?>' class="btn btn-success">Modificar</a></td>
                <td><a href='clienteElimina.php?cod=<?php echo $r[0];?>' class="btn btn-danger">Eliminar</a></td>
            </tr>
            <?php
        }
    }
?>

</table>
<br></br>
<center><h2><a href="clienteLista.php">IR PRINCIPAL</a></h2></center>
<div>
    </form>
</div>
<div class="col-md-3"></div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
