<?php
    $cod=$_GET['cod'];
    include("../modelo/usuarioClase.php");
    $usu=new Usuario($cod,"","","","","");
    $r=$usu->eliUsuario();
    if($r){
        ?>
            <script>
                alert("Se elimino correctamente");
                location.href='usuarioLista.php';
            </script>
        <?php
        }else{
        ?>
        <script>
            alert("No se elimino. ERROR! ");
            location.href='usuarioLista.php';
        </script>
        <?php 
    }
?>