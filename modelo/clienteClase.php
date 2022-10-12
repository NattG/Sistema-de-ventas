<?php
class Cliente{
    private $id;
    private $razon;
    private $nit;
    private $estado;
    public function __construct($i, $r, $n, $e){
        $this -> id=$i;
        $this -> razon=$r;
        $this -> nit=$n;
        $this -> estado=$e;
    }

    public function grabarCliente(){
        include("conexion.php");
        $db = new Conexion();
        $consulta=$db->query("insert into cliente(razonsocial,nit_ci,estado) values('$this->razon','$this->nit','$this->estado')");
        return($consulta);
    }

    public function listarCliente(){
        include("conexion.php");
        $db = new Conexion();
        $sql=$db->query("select * from cliente where estado='Activo'");
        return($sql);
    } 

    public function eliminarCliente(){
        include("conexion.php");
        $db = new Conexion();
        $sql=$db->query("update cliente set estado='Inactivo' where idcliente='$this->id'");
        return($sql);
    }

    public function buscarClienteId(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("select * from cliente where estado='Activo' and idcliente='$this->id'");
        return($sql);
    }
    public function buscarCliente($n){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cliente where razonsocial like '%$n%' and estado='Activo'");
        return($sql);
    }
    public function editarCliente($cod,$rs,$ni){
        $db=new Conexion();
        $sql=$db->query("update cliente set razonsocial='$rs', nit_ci='$ni' where idcliente='$cod'");
        return($sql);
    }

    public function reporte(){
        $db = new Conexion();
        $sql=$db->query("select * from cliente where estado='Activo'");
        return($sql);
    }
  }
?>