<?php
    session_start();
    if(!empty($_SESSION["carrito_ventas1"])){
        $carro = $_SESSION["carrito_ventas1"];
        if(count($carro)==1){
            unset($_SESSION["carrito_ventas1"]);
        }else{
            $nuevocarrito = array();
            foreach ($carro as $c){
                if($c["id_producto"]!=$_GET["id"]){
                    $nuevocarrito[]=$c;
                }
            }
            $_SESSION["carrito_ventas1"]=$nuevocarrito;
        }
    }
    print "<script>window.location='controlaventaCarrito.php';</script>";
?>