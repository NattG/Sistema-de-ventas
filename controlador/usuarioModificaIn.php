<?php
    $cod=$_GET['cod'];
    include("../modelo/usuarioClase.php");
    $usu=new Usuario($cod,"","","","","");
    $r=$usu->activarUsuario();
    if($r){
        ?>
            <script>
                alert("Se activo correctamente");
                location.href='usuarioLista.php';
            </script>
        <?php
        }else{
        ?>
        <script>
            alert("No se activo. ERROR! ");
            location.href='usuarioLista.php';
        </script>
        <?php 
    }
?>