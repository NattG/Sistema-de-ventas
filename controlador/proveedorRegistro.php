<?php
    include("../vista/proveedorFormRegistro.php");
    if(isset($_POST['registrar'])){
        $em=$_POST['emp'];
        $co=$_POST['con'];
        $ma=$_POST['ema'];
        $te=$_POST['tel'];
        $di=$_POST['dir'];
        $lo=$_FILES['log']['name'];

        include("../modelo/proveedorClase.php");
        $pro = new Proveedor("",$em,$co,$ma,$te,$di,$lo);
        $r = $pro->grabarProveedor();
        if($r){
            $ima=$_FILES['log']['tmp_name'];
            @copy($ima,'imagenesproveedor/'.$lo);
            ?>
                <script>
                    alert("Se registro correctamente");
                    location.href='proveedorLista.php';
                </script>
            <?php
        }else{
            ?>
            <script>
                alert("No se registro. ERROR! ");
                location.href='proveedorLista.php';
            </script>
        <?php 
        }
    }
?>