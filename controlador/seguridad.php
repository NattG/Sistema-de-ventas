<?php
    session_start();
    if($_SESSION['ingreso']!="si"){
        echo"<script>
                alert('Debe iniciar sesion');
                location.href='control.php';
            </script>";
    }
?>