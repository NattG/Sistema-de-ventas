<?php
    include("../modelo/cargoClase.php");
    $car=new Cargo("","");
    $r1=$car->lista();
    include("../vista/cargoLista.php")
?>