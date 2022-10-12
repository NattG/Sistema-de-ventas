<?php
    include("../modelo/productoClase.php");
    $pro= new Producto("","","","","","","","","","");
    $res=$pro->listarProducto();
    include("../vista/registroventa.php");
?>