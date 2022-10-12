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
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"><br>
    <h1>MODIFICAR CARGO</h1>
    <form role="form" method="GET">
        <h1>Actualizar</h1>
        <div class="form-group">
            <input type="form-control" type="hidden" name="cid" value='<?=$r[0];?>'>
        </div>
        <div class="form-group">
            <label>Cargo</label>
            <input class="form-control" type="text" name="cargo" id="cargo" value='<?=utf8_encode($r[1]);?>' >
        </div>
        <br>
        <div class="form-group">
            <input type="submit" value="Actualizar" name="act" id="act" class="btn btn-primary">
        </div>
        
    </form>
    </div>
    <div class="col-md-3"></div>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>