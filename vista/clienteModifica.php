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
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h1>MODIFICAR CLIENTE</h1><br>
        <?php
            $reg=mysqli_fetch_array($res);
        ?>
        <form action="" method="get">

            <input type="text" name="cod" id="cod" hidden value="<?php echo $reg[0]; ?>" >
            <label for="">Razon social</label>
            <input type="text" name="razon" id="razon" value="<?php echo $reg[1]; ?>" class="form-control">
            <label for="">NIT / CI</label>
            <input type="text" name="nit" id="nit" value="<?php echo $reg[2]; ?>" class="form-control"></br>
            <input type="submit" value="Modificar" class="btn btn-warning" name="ModificaC" id="ModificaC">
            <a href="../controlador/clienteLista.php" class="btn btn-success">Cancelar</a>
        </form>
    </div>
    <div class="col-md-3"></div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
