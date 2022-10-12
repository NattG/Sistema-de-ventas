<?php
    include("../modelo/proveedorClase.php");
    $car=new Proveedor("","","","","","","");
    $r1=$car->lista();
    include("../vista/proveedorLista.php")
?>