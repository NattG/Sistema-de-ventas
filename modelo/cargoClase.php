<?php
class Cargo{

    private $id;
    private $cargo;
    public function __construct($id,$cargo){
        $this->setId($id);
        $this->setCargo($cargo);
    }
    public function grabarCargo(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("INSERT INTO cargo(cargo) values ('$this->cargo')");
        return ($sql);
    }
    public function buscarCargo($n){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cargo where cargo like '$n%'");
        return ($sql);
    }
    public function lista(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cargo order by cargo asc");
        return ($sql);
    }
    public function listaCargo(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cargo where idcargo='$this->id'");
        return ($sql);
    }
    public function reporte(){
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cargo order by cargo asc");
        return ($sql);
    }
    public function eliCargo(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("DELETE FROM cargo where idcargo='$this->id'");
        return ($sql);
    }
    public function ediCargo(){
        $db=new Conexion();
        $sql=$db->query("UPDATE cargo set cargo='$this->cargo' where idcargo='$this->id'");
        return ($sql);
    }
    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }
    public function setCargo($cargo){
        $this->cargo=$cargo;
    }
    public function getCargo(){
        return $this->cargo;
    }
}
?>