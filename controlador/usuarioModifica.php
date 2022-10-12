<?php
    $cod=$_GET['cod'];
    include("../modelo/usuarioClase.php");
    $usu=new Usuario($cod,"","","","","");
    $r=$usu->listarUsu();
    include("../vista/usuarioModifica.php");
    if(isset($_GET['act'])){
        $us=$_GET['usu'];
        $ni=$_GET['nivel'];
        $p1=$_GET['pas1'];
        $p2=$_GET['pas2'];
        if(empty($p1) and empty($p2)){
            $usu=new Usuario($cod,"",$us,"",$ni,"");
            $res=$usu->ediUsuario1();
            if($res){
                ?>
                    <script>
                        alert("Se actualizo correctamente");
                        location.href='usuarioLista.php';
                    </script>
                <?php
                }else{
                ?>
                <script>
                    alert("No se actualizo. ERROR! ");
                    location.href='usuarioLista.php';
                </script>
                <?php 
            }
        }else{
            if(strcmp($p1,$p2)==0){
                $pw1=md5($p1);
                $usu=new Usuario($cod,"",$us,$pw1,$ni,"");
                $res=$usu->ediUsuario();
                if($res){
                ?>
                    <script>
                        alert("Se actualizo correctamente");
                        location.href='usuarioLista.php';
                    </script>
                <?php
                }else{
                ?>
                <script>
                    alert("No se actualizo. ERROR! ");
                    location.href='usuarioLista.php';
                </script>
                <?php 
            }
            }else{
                ?>
                <script>
                    alert("No se actualizo. Contraseñas diferentes! ");
                    location.href='usuarioLista.php';
                </script>
                <?php  
            }
        }
    }
?>