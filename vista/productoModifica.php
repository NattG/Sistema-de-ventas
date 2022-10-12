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
    <h1>MODIFICAR PRODUCTO</h1>
    <form role="form" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input  type="hidden" name="cid" value='<?=$r[0];?>'>
        </div>
        <div class="form-group">
            <label>Empresa</label>
            <select name="emp" id="emp" class="form-control">
             <?php
                while($reg=mysqli_fetch_array($res)){
                    ?>
                        <option value="<?php echo $reg['id_proveedor']; ?>" <?php if(utf8_encode($r['id_proveedor'])==$reg['id_proveedor']) echo "selected"; ?>>
                        <?php echo $reg['empresa']; ?>
                    </option>
                    <?php
                }
                ?>
                </select>
            </br>
            <label for="">Titulo</label>
            <input type="text" class="form-control" name="nom" id="nom" value='<?=utf8_encode($r[2]);?>'/>
            </br>
            <label for="">Autor</label>
            <input type="text" class="form-control" name="aut" id="aut" value='<?=utf8_encode($r[3]);?>'/>
            </br>
            <label for="">Clasificacion</label>
            <input type="text" class="form-control" name="cla" id="cla" value='<?=($r[4]);?>'/>
            </br>
            <label for="">Precio Compra</label>
            <input type="number" class="form-control" name="pco" id="pco" value='<?=utf8_encode($r[5]);?>'/>
            </br>
            <label for="">Precio Venta</label>
            <input type="number" class="form-control" name="pve" id="pve" value='<?=utf8_encode($r[6]);?>'/>
            </br>
            <label for="">Stock</label>
            <input type="number" class="form-control" name="sto" id="sto" value='<?=utf8_encode($r[7]);?>'/>
            </br>
            <label for="">Fecha</label>
            <input type="date" class="form-control" name="fec" id="fec" value='<?=utf8_encode($r[8]);?>'/>
            </br>
            <label for="">Logo</label>
            <img src="../controlador/imagenesproducto/<?php echo $r[9]; ?>" alt="" width="50px" height="65px">
            <br><br>
            <input type="file" name="log" id="log" value="Examinar" class="form-control" />
            </br>
        </div>

        <div class="form-group">
            <input type="submit" value="Actualizar" name="act" id="act" class="btn btn-primary">
            <a href="../controlador/productoLista.php" class="btn btn-success">Cancelar</a>
        </div>
        
    </form>
    </div>
    <div class="col-md-3"></div>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>