<?php
    include("../vista/login.php");
    if(isset($_POST['Ingresar'])){
        $us=$_POST['usr'];
        $pw=$_POST['pwd'];
        $pw1=md5($pw);
        include("../modelo/usuarioClase.php");
        $usuario= new Usuario("","",$us,$pw1,"","");
        $res=$usuario->verificar();
        if(mysqli_num_rows($res)!=0){
            session_start();
            $_SESSION['ingreso']="si";
            $r=mysqli_fetch_array($res);
            $_SESSION['id']=$r['id_empleado'];
            $_SESSION['nombre']=$r['usuario'];
            $_SESSION['nivel']=$r['nivel'];
            header("location:../vista/admin.php");
        }else{
            echo"<script>
                alert('Usuario y contraseña incorrectos');
                location.href='control.php';
            </script>";
        }
    }
?>
 