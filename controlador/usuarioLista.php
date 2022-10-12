<?php
    include("../modelo/usuarioClase.php");
    $us=new Usuario("","","","","","");
    $res=$us->listarUsuario();
    include("../vista/usuarioListaV.php");
?>