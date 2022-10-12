<?php
$cid=$_GET['cid'];
include("../modelo/proveedorClase.php");
$car=new Proveedor($cid,"","","","","","");
$r1=$car->listaIdProveedor();
$r=mysqli_fetch_array($r1);
include("../vista/proveedorModifica.php");
if(isset($_POST['act'])){
    $em=$_POST['emp'];
    $co=$_POST['con'];
    $ma=$_POST['ema'];
    $te=$_POST['tel'];
    $di=$_POST['dir'];

    $lo=$_FILES['log']['name'];

    if(empty($lo)){
        $pro = new Proveedor($cid,$em,$co,$ma,$te,$di,"");
        $r = $pro->actualizaProveedorSimg();
    }
    else{
        $pro = new Proveedor($cid,$em,$co,$ma,$te,$di,$lo);
        $r = $pro->actualizaProveedor();
        $carpeta='imagenesproveedor/';
        $nomte=$_FILES['log']['tmp_name'];
        move_uploaded_file($nomte,$carpeta.$lo);
    }
    if($r){
        echo"
            <script>
            alert('Si se modifico');
            location.href='proveedorLista.php';
            </script>";
    }else{
        echo"
            <script>
            alert('No se modifico');
            location.href='proveedorLista.php';
            </script>";
    }
}


?>