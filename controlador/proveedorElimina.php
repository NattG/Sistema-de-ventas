<?php
    $cid=$_GET['cid'];
    include("../modelo/proveedorClase.php");
    $prov=new Proveedor($cid,"","","","","","");
    $r=$prov->eliProveedor();
    if($r){
        ?>
        <script>
            alert("Se elimino");
            location.href='proveedorLista.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("No se elimino. ERROR!");
            location.href='proveedorLista.php';
        </script>
        <?php
    }
?>