<?php
    $cod=$_GET['cid'];
    include("../modelo/productoClase.php");
    $cli=new Producto($cod,"","","","","","","","","");
    $res=$cli->eliminarProducto();
    if($res){
        ?>
        <script>
            alert("Se elimino correctamente.");
            location.href='productoLista.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("No se elimino. ERROR!");
            location.href='productoLista.php';
        </script>
        <?php
    }
?>