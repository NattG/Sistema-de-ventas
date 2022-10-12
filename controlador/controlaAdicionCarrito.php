<?php
    session_start();
    if(!empty($_POST)){
        if(isset($_POST['id_producto']) && isset($_POST['cantidad'])){
            if(empty($_SESSION['carrito_ventas1'])){
                $_SESSION['carrito_ventas1']=array(array("id_producto"=>$_POST['id_producto'],"cantidad"=>$_POST['cantidad']));
            }
            else{
                $carro=$_SESSION['carrito_ventas1'];
                $repetido=false;
                foreach($carro as $c){
                    if($c['id_producto']==$_POST['id_producto']){
                        $repetido=true;
                        break;
                    }
                }
                if($repetido)
                    print "<script> alert('El producto ya fue agregado'); </script>";
                else{
                    array_push($carro,array("id_producto"=>$_POST['id_producto'],"cantidad"=>$_POST['cantidad']));
                    $_SESSION['carrito_ventas1']=$carro;
                }
            }
            print "<script> window.location='controladorventa.php'; </script>";
        }
    }
?>