<?php
    include("../modelo/usuarioClase.php");
    $us=new Usuario("","","","","","");
    $res=$us->listarUsuarioIn();
    include("../vista/usuarioListaIn.php");
?>