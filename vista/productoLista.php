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
<div class="row px-2 py-3">

<?php
while($reg=mysqli_fetch_array($res)){
?>
<div class="col-3 ps-5">

 <div class="card" style="width: 18rem;">
  <img src="../controlador/imagenesproducto/<?php echo $reg[10];?>" class="card-img-top" alt="..." height="350px" >
  <div class="card-body text-center">
    <h5 class="card-title fs-4"><?php echo $reg[3]; ?></h5>
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Autor: <?php echo $reg[4]; ?></li>
    <li class="list-group-item">Clasificacion: <?php echo $reg[5]; ?></li>
    <li class="list-group-item">Precio venta: <?php echo $reg[7]; ?></li>
    <li class="list-group-item">Stock: <?php echo $reg[8]; ?></li>
    <li class="list-group-item">Precio compra: <?php echo $reg[6]; ?></li>
  </ul>
  <div class="card-body">
    <a href='productoModifica.php?cid=<?php echo $reg['id_producto'];?>' class="btn btn-success bi bi-pencil-square"></a>
    <a href="productoElimina.php?cid=<?php echo $reg['id_producto'];?>" class="btn btn-danger bi bi-trash"></a>
  </div>
</div>
</div>
<?php
}
?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>