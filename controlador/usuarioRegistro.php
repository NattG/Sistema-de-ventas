<?php
    include("../modelo/empleadoClase.php");
    $car=new Empleado("","","","","","","","","","","");
    $res=$car->lista();
    include("../vista/usuarioFormRegistro.php");
    if(isset($_POST['registrar'])){
        $em=$_POST['emp'];
        $us=$_POST['usu'];
        $pas1=$_POST['con1'];
        $pas2=$_POST['con2'];
        $ni=$_POST['niv'];
        $es='Activo';
        if(strcmp($pas1,$pas2)==0){
            include("../modelo/usuarioClase.php");
            $usr=new Usuario("",$em,$us,$pas1,$ni,$es);
            $r1=$usr->existeUsuario($em);
            $num=mysqli_num_rows($r1);
            if($num!=0){
                echo "<script>
                    alert('Usuario existe');
                    location.href='usuarioLista.php';
                </script>";
            }else{
                $pa=md5($pas1);
                $usu = new Usuario("",$em,$us,$pa,$ni,$es);
                $r = $usu->grabarUsuario();
                if($r){
                ?>
                    <script>
                        alert("Se registro correctamente");
                        location.href='usuarioLista.php';
                    </script>
                <?php
                }else{
                ?>
                <script>
                    alert("No se registro. ERROR! ");
                    location.href='usuarioLista.php';
                </script>
                <?php 
            }
            }
        }
        else{
            ?>
            <script>
                alert("ERROR! Contraseñas diferentes. ");
                location.href='proveedorLista.php';
            </script>
        <?php  
        }
    }
?>