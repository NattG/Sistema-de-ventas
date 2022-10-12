<?php
    include("../vista/cargoRegistro.php");
    if(isset($_POST['registrarCargo'])){
        $ca=$_POST['cargo'];
        include("../modelo/cargoClase.php");
        $car = new Cargo("",$ca);
        $r = $car->grabarCargo();
        if($r){
            ?>
                <script>
                    alert("Se registro correctamente");
                    location.href='cargoLista.php';
                </script>
            <?php
        }else{
            ?>
            <script>
                alert("No se registro. ERROR! ");
                location.href='cargoLista.php';
            </script>
        <?php 
        }
    }
?>