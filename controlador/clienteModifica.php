<?php
    $cod=$_GET['cod'];
    include("../modelo/clienteClase.php");
    $cli=new Cliente($cod,"","","");
    $res=$cli->buscarClienteId();
    include("../vista/clienteModifica.php");
    if(isset($_GET['ModificaC'])){
        $rs=$_GET['razon'];
        $ni=$_GET['nit'];
        $res1=$cli->editarCliente($cod,$rs,$ni);
        if($res1){
            ?>
                <script>
                    alert("Se modifico el registro del Cliente");
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert("No modifico el registro del Cliente. ERROR!");
                </script>
            <?php
        }    
    }
?>