<?php
$cid=$_GET['cid'];
include("../modelo/productoClase.php");
$car=new Producto($cid,"","","","","","","","","");
$r1=$car->listaProducto();
include("../modelo/proveedorClase.php");
$car=new Proveedor("","","","","","","");
$res=$car->listaP();
$r=mysqli_fetch_array($r1);
include("../vista/productoModifica.php");
if(isset($_POST['act'])){
    $em=$_POST['emp'];
    $no=$_POST['nom'];
    $co=$_POST['aut'];
    $ma=$_POST['cla'];
    $te=$_POST['pco'];
    $di=$_POST['pve'];
    $st=$_POST['sto'];
    $fe=$_POST['fec'];

    $lo=$_FILES['log']['name'];

    if(empty($lo)){
        $pro = new Producto($cid,$em,$no,$co,$ma,$te,$di,$st,$fe,"");
        $r = $pro->actualizaProductoSimg();
    }
    else{
        $pro = new Producto($cid,$em,$no,$co,$ma,$te,$di,$st,$fe,$lo);
        $r = $pro->actualizaProducto();
        $carpeta='imagenesproducto/';
        $nomte=$_FILES['log']['tmp_name'];
        move_uploaded_file($nomte,$carpeta.$lo);
    }
    if($r){
        echo"
            <script>
            alert('Si se modifico');
            location.href='productoLista.php';
            </script>";
    }else{
        echo"
            <script>
            alert('No se modifico');
            location.href='productoLista.php';
            </script>";
    }
}


?>