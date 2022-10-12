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
    <div class="col-md-6"><br>
    <h1>MODIFICAR CARGO</h1>
    <form role="form" method="POST" enctype="multipart/form-data">
        <h1>Actualizar</h1>
        <div class="form-group">
            <input  type="hidden" name="cid" value='<?=$r[0];?>'>
        </div>
        <div class="form-group">
            <label for="">Empresa</label>
            <input type="text" class="form-control" name="emp" id="emp" value='<?=utf8_encode($r[1]);?>'/>
            </br>
            <label for="">Contacto</label>
            <input type="text" class="form-control" name="con" id="con" value='<?=utf8_encode($r[2]);?>'/>
            </br>
            <label for="">E-mail</label>
            <input type="email" class="form-control" name="ema" id="ema" value='<?=utf8_encode($r[3]);?>'/>
            </br>
            <label for="">Telefono</label>
            <input type="number" class="form-control" name="tel" id="tel" value='<?=($r[4]);?>'/>
            </br>
            <label for="">Direccion</label>
            <input type="text" class="form-control" name="dir" id="dir" value='<?=utf8_encode($r[5]);?>'/>
            </br>
            <label for="">Logo</label>
            <img src="../controlador/imagenesproveedor/<?php echo $r[6]; ?>" alt="" width="50px" height="45px">
            </br>
            <input type="file" name="log" id="log" value="Examinar" class="form-control" />
            </br>
        </div>

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