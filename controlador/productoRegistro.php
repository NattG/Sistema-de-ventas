<?php
    include("../modelo/proveedorClase.php");
    $car=new Proveedor("","","","","","","");
    $res=$car->lista();
    include("../vista/productoRegistro.php");

    if(isset($_POST['registrar'])){
        $pr=$_POST['prov'];
        $d1=$_POST['nom'];
        $d2=$_POST['aut'];
        $d3=$_POST['clas'];
        $d4=$_POST['pco'];
        $d5=$_POST['pve'];
        $d6=$_POST['sto'];
        $d7=$_POST['fec'];
        $lo=$_FILES['log']['name'];

        include("../modelo/productoClase.php");
        $pro = new Producto("",$pr,$d1,$d2,$d3,$d4,$d5,$d6,$d7,$lo);
        $r = $pro->grabarProducto();
        if($r){
            $ima=$_FILES['log']['tmp_name'];
            @copy($ima,'imagenesproducto/'.$lo);
            ?>
                <script>
                    alert("Se registro correctamente");
                    location.href='productoLista.php';
                </script>
            <?php
        }else{
            ?>
            <script>
                alert("No se registro. ERROR! ");
                location.href='productoLista.php';
            </script>
        <?php 
        }
    }
?>