<?php
$cid=$_GET['cid'];
include("../modelo/cargoClase.php");
$car=new Cargo($cid,"");
$r1=$car->listaCargo();
$r=mysqli_fetch_array($r1);
include("../vista/cargoModifica.php");
if(isset($_GET['act'])){
    $car=$_GET['cargo'];
    $car=new Cargo($cid,$car);
    $r=$car->ediCargo();
    if($r){
        echo"
            <script>
            alert('Si se modifico');
            location.href='cargoLista.php';
            </script>";
    }else{
        echo"
            <script>
            alert('No se modifico');
            location.href='cargoLista.php';
            </script>";
    }
}


?>