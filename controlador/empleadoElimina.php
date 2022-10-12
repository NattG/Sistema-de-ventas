<?php
    $cod=$_GET['cod'];
    include("../modelo/empleadoClase.php");
    $emp=new Empleado($cod,"","","","","","","","","","");
    $r=$emp->eliEmpleado();
    if($r){
        ?>
        <script>
            alert("Se elimino");
            location.href='empleadoLista.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("No se elimino. ERROR!");
            location.href='empleadoLista.php';
        </script>
        <?php
    }
?>