<?php
    include("../modelo/productoClase.php");
    $emp=new Producto("","","","","","","","","","");
    $res=$emp->lista();
    include("../vista/productoLista.php");
?>