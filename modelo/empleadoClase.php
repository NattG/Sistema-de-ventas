<?php
class Empleado
{
    private $id;
    private $idcargo;
    private $ci;
    private $nombre;
    private $paterno;
    private $materno;
    private $direccion;
    private $telefono;
    private $fecha_nacimiento;
    private $genero;
    private $intereses;
    function __construct($i,$idc,$ci,$nom,$pat,$mat,$dir,$tel,$fec,$gen,$inte)
    {
        $this->setId($i);
        $this->setIdcargo($idc);
        $this->setCi($ci);
        $this->setNombre($nom);
        $this->setPaterno($pat);
        $this->setMaterno($mat);
        $this->setDireccion($dir);
        $this->setTelefono($tel);
        $this->setFecha_nacimiento($fec);
        $this->setGenero($gen);
        $this->setIntereses($inte);
    }
    public function grabarEmpleado(){
        
        $db=new Conexion();
        $sql=$db->query("INSERT INTO empleado(id_cargo,ci,nombre,paterno,materno,direccion,telefono,fechanacimiento,genero,intereses) values('$this->idcargo','$this->ci','$this->nombre','$this->paterno','$this->materno','$this->direccion','$this->telefono','$this->fecha_nacimiento','$this->genero','$this->intereses')");
        return ($sql);
    }
    public function lista(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT e.*,c.cargo FROM empleado e INNER JOIN cargo c ON c.idcargo=e.id_cargo order by e.nombre asc");
        return ($sql);
    }
    public function buscarEmpleado($n){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT e.*,c.cargo FROM empleado e INNER JOIN cargo c ON c.idcargo=e.id_cargo where nombre like '%$n%' ");
        return($sql);
    }
    public function eliEmpleado(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("DELETE FROM empleado where id_empleado='$this->id'");
        return ($sql);
    }
    public function setId($dato){
        $this->id=$dato;
    }
    public function setIdcargo($dato){
        $this->idcargo=$dato;
    }
    public function setCi($dato){
        $this->ci=$dato;
    }
    public function setNombre($dato){
        $this->nombre=$dato;
    }
    public function setPaterno($dato){
        $this->paterno=$dato;
    }
    public function setMaterno($dato){
        $this->materno=$dato;
    }
    public function setDireccion($dato){
        $this->direccion=$dato;
    }
    public function setTelefono($dato){
        $this->telefono=$dato;
    }
    public function setFecha_nacimiento($dato){
        $this->fecha_nacimiento=$dato;
    }
    public function setGenero($dato){
        $this->genero=$dato;
    }
    public function setIntereses($dato){
        $this->intereses=$dato;
    }
    public function getId(){
        return $this->id;
    }
    public function getIdcargo(){
        return $this->idcargo;
    }
    public function getCi(){
        return $this->ci;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getPaterno(){
        return $this->paterno;
    }
    public function getMaterno(){
        return $this->materno;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getFecha_nacimiento(){
        return $this->fecha_nacimiento;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getIntereses(){
        return $this->intereses;
    }
}
?>