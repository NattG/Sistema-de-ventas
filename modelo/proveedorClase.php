<?php
class Proveedor{
    private $id;
    private $empresa;
    private $contacto;
    private $mail;
    private $telefono;
    private $direccion;
    private $logo;

    public function __construct($id,$em,$co,$ea,$te,$di,$l){
        $this->setId($id);
        $this->setEmpresa($em);
        $this->setContacto($co);
        $this->setMail($ea);
        $this->setTelefono($te);
        $this->setDireccion($di);
        $this->setLogo($l);
    }
    public function grabarProveedor(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("INSERT INTO proveedor(empresa,contacto,mail,telefono,direccion,logo) values ('$this->empresa','$this->contacto','$this->mail','$this->telefono','$this->direccion','$this->logo')");
        return ($sql);

    }
    public function lista(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM proveedor order by empresa asc");
        return ($sql);
    }
    public function listaP(){
        
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM proveedor order by empresa asc");
        return ($sql);
    }
    public function listaIdProveedor(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM proveedor where id_proveedor='$this->id'");
        return ($sql);
    }
    public function actualizaProveedorSimg(){
        $db=new Conexion();
        $sql=$db->query("UPDATE proveedor set empresa='$this->empresa', contacto='$this->contacto',mail='$this->mail',telefono='$this->telefono',direccion='$this->direccion' where id_proveedor='$this->id'");
        return ($sql);
    }
    public function actualizaProveedor(){
        $db=new Conexion();
        $sql=$db->query("UPDATE proveedor set empresa='$this->empresa', contacto='$this->contacto',mail='$this->mail',telefono='$this->telefono',direccion='$this->direccion', logo='$this->logo' where id_proveedor='$this->id'");
        return ($sql);
    }
    public function buscarProveedor($n){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM proveedor where empresa like '$n%'");
        return ($sql);
    }
    public function eliProveedor(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("DELETE FROM proveedor where id_proveedor='$this->id'");
        return ($sql);
    }
    public function setId($i){
        $this->id=$i;
    }
    public function getId(){
        return $this->id;
    }
    public function setEmpresa($em){
        $this->empresa=$em;
    }
    public function getEmpresa(){
        return $this->empresa;
    }
    public function setContacto($co){
        $this->contacto=$co;
    }
    public function getContacto(){
        return $this->contacto;
    }
    public function setMail($ea){
        $this->mail=$ea;
    }
    public function getMail(){
        return $this->mail;
    }
    public function setTelefono($te){
        $this->telefono=$te;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setDireccion($di){
        $this->direccion=$di;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function setLogo($l){
        $this->logo=$l;
    }
    public function getLogo(){
        return $this->logo;
    }
}
?>