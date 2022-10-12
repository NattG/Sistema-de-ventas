<?php 
class Usuario{
    private $idUsuario;
    private $idEmpleado;
    private $usuario;
    private $pasword;
    private $nivel;
    private $estado;

    public function __construct($idUsuario,$idEmpleado,$usuario,$pasword,$nivel,$estado){
        $this->setIdUsuario($idUsuario);
        $this->setIdEmpleado($idEmpleado);
        $this->setUsuario($usuario);
        $this->setPasword($pasword);
        $this->setNivel($nivel);
        $this->setEstado($estado);
    }
    public function grabarUsuario(){
        $db=new Conexion();
        $sql=$db->query("INSERT INTO usuarios(id_empleado,usuario,pasword,nivel,estado) values ('$this->idEmpleado','$this->usuario','$this->pasword','$this->nivel','$this->estado')");
        return ($sql);
    }
    public function listarUsuario(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT u.*,emp.nombre,emp.paterno,emp.materno FROM usuarios u INNER JOIN empleado emp ON u.id_empleado = emp.id_empleado where u.estado='Activo'");
        return ($sql);
    }
    public function listarUsuarioIn(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT u.*,emp.nombre,emp.paterno,emp.materno FROM usuarios u INNER JOIN empleado emp ON u.id_empleado = emp.id_empleado where u.estado='Inactivo'");
        return ($sql);
    }
    public function existeUsuario($em){
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM usuarios where id_empleado='$this->idEmpleado' and estado='Activo'");
        return ($sql);
    }
    public function listarUsu(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT u.*,emp.nombre,emp.paterno,emp.materno FROM usuarios u INNER JOIN empleado emp ON u.id_empleado = emp.id_empleado where u.id_usuario='$this->idUsuario' and u.estado='Activo'");
        return ($sql);
    }
    public function eliUsuario(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("UPDATE usuarios SET estado='Inactivo' where id_usuario=$this->idUsuario");
        return ($sql);
    }
    public function activarUsuario(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("UPDATE usuarios SET estado='Activo' where id_usuario=$this->idUsuario");
        return ($sql);
    }
    public function ediUsuario(){
        $db=new Conexion();
        $sql=$db->query("UPDATE usuarios SET usuario='$this->usuario', pasword='$this->pasword',nivel='$this->nivel' where id_usuario=$this->idUsuario and estado='Activo'");
        return ($sql);
    }
    public function ediUsuario1(){
        $db=new Conexion();
        $sql=$db->query("UPDATE usuarios SET usuario='$this->usuario',nivel='$this->nivel' where id_usuario=$this->idUsuario and estado='Activo'");
        return ($sql);
    }
    public function buscarUsuario(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT u.*,emp.nombre,emp.paterno,emp.materno FROM usuarios u INNER JOIN empleado emp ON u.id_empleado = emp.id_empleado where u.usuario like '%%$usuario%%' and u.estado='Activo'");
        return ($sql);
    }
    public function verificar(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM usuarios where usuario='$this->usuario' and pasword='$this->pasword' and estado='Activo'");
        return ($sql);
    }
    public function reporte(){
        $db=new Conexion();
        $sql=$db->query(" SELECT concat(e.paterno,' 'e.materno,' ',e.nombre)
        as Empleado, u.usuario,u.nivel,u.estado from usuarios u inner join empleado e on u.id_empleado=e.id_empleado where estado='Activo'");
        return ($sql);
    }
    public function setIdUsuario($dato){
        $this->idUsuario=$dato;
    }
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function setIdEmpleado($dato){
        $this->idEmpleado=$dato;
    }
    public function getIdEmpleado(){
        return $this->idEmpleado;
    }
    public function setUsuario($dato){
        $this->usuario=$dato;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function setPasword($dato){
        $this->pasword=$dato;
    }
    public function getPasword(){
        return $this->pasword;
    }
    public function setNivel($dato){
        $this->nivel=$dato;
    }
    public function getNivel(){
        return $this->nivel;
    }
    public function setEstado($dato){
        $this->estado=$dato;
    }
    public function getEstado(){
        return $this->estado;
    }
}
?>