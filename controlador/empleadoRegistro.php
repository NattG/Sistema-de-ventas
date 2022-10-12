<?php
    include("../modelo/cargoClase.php");
    $car=new Cargo("","");
    $res=$car->lista();
    include("../vista/empleadoRegistro.php");

    if(isset($_POST['registrarEmpleado'])){
        $ca=$_POST['cargo'];
        $d1=$_POST['cedula'];
        $d2=$_POST['nombre'];
        $d3=$_POST['paterno'];
        $d4=$_POST['materno'];
        $d5=$_POST['direccion'];
        $d6=$_POST['telefono'];
        $d7=$_POST['fecha'];
        $d8=$_POST['genero'];
        $d9=$_POST['intereses'];
        $in="";
        foreach($d9 as $i=>$valor){
            $in=$in.$d9[$i]." ";
        }
        include("../modelo/empleadoClase.php");
        $emp = new Empleado("","$ca","$d1","$d2","$d3","$d4","$d5","$d6","$d7","$d8","$in");
        $r=$emp->grabarEmpleado();
        if($r){
            ?>
                <script>
                    alert("Se registro correctamente");
                    location.href='empleadoLista.php';
                </script>
            <?php
        }else{
            ?>
            <script>
                alert("No se registro. ERROR! ");
                location.href='empleadoLista.php';
            </script>
        <?php 
        }
    }
?>