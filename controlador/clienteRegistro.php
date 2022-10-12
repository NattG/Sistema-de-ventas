<?php
    include("../vista/clienteFormRegistro.php");
    if(isset($_POST['registrarCliente'])){
        $razon=$_POST['rs'];
        $nit=$_POST['ni'];
        $estado="Activo";
        //echo $razon." ".$nit;
        include("../modelo/clienteClase.php");
        $cli = new Cliente("",$razon,$nit,$estado);
        $res = $cli->grabarCliente();
        if($res){
            ?>
                <script>
                    alert("Se registro correctamente");
                    location.href='clienteLista.php';
                </script>
            <?php
        }else{
            ?>
            <script>
                alert("No se registro. ERROR! ");
                location.href='clienteLista.php';
            </script>
        <?php 
        }
    }
?>