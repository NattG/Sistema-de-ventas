<?php
    include("../modelo/empleadoClase.php");
    $emp=new Empleado("","","","","","","","","","","");
    $res=$emp->lista();
    include("../vista/empleadoListaV.php");
?>