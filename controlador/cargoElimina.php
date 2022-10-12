<?php
    $cid=$_GET['cid'];
    include("../modelo/cargoClase.php");
    $car=new Cargo($cid,"");
    $r=$car->eliCargo();
    if($r){
        ?>
        <script>
            alert("Se elimino");
            location.href='cargoLista.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("No se elimino. ERROR!");
            location.href='cargoLista.php';
        </script>
        <?php
    }
?>