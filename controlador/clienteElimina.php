<?php
    $cod=$_GET['cid'];
    include("../modelo/clienteClase.php");
    $cli=new Cliente($cod,"","","");
    $res=$cli->eliminarCliente();
    if($res){
        ?>
        <script>
            alert("Se elimino correctamente.");
            location.href='clienteLista.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("No se elimino. ERROR!");
            location.href='clienteLista.php';
        </script>
        <?php
    }
?>