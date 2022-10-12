<?php
class Producto{
   private $id; 
   private $ca; 
   private $ci;  
   private $au; 
   private $cl; 
   private $pa; 
   private $ma; 
   private $di; 
   private $fe;
   private $im;
   public function __construct($id,$ca,$ci,$au,$cl,$pa,$ma,$di,$fe,$im)
   {
        $this->setId($id);
        $this->setEmpresa($ca);
        $this->setNombre($ci);
        $this->setAutor($au);
        $this->setClasificacion($cl);
        $this->setCompra($pa);
        $this->setVenta($ma);
        $this->setStock($di);
        $this->setFecha($fe);
        $this->setImagen($im);
   } 
   public function grabarProducto(){
    $db=new Conexion();
    $sql=$db->query("insert into producto(id_proveedor,titulo,autor,clasificacion,costocompra,costoventa,stock,fecha,imagen) values ('$this->empresa','$this->nombre','$this->autor','$this->clasificacion','$this->compra','$this->venta','$this->stock','$this->fecha','$this->imagen')");
    return ($sql);
   }
   public function lista(){
    include ("conexion.php");
    $db=new Conexion();
    $sql=$db->query("SELECT pr.empresa,p.* from producto p join proveedor pr on p.id_proveedor=pr.id_proveedor order by p.titulo asc");
    return ($sql);
   }
   public function eliminarProducto(){
      include ("conexion.php");
      $db=new Conexion();
      $sql=$db->query("DELETE from producto where id_producto=$this->id");
      return ($sql);
   }
   public function listaProducto(){
      include_once ("conexion.php");
      $db=new Conexion();
      $sql=$db->query("SELECT p.*,prov.empresa from producto p inner join proveedor prov on prov.id_proveedor=p.id_proveedor where id_producto='$this->id'");
      return ($sql);
   }
   public function actualizaProductoSimg(){
      $db=new Conexion();
      $sql=$db->query("UPDATE producto set id_proveedor='$this->empresa',titulo='$this->nombre', autor='$this->autor',clasificacion='$this->clasificacion',costocompra='$this->compra',costoventa='$this->venta',stock='$this->stock',fecha='$this->fecha' where id_producto='$this->id'");
      return ($sql);
  }
  public function actualizaProducto(){
      $db=new Conexion();
      $sql=$db->query("UPDATE producto set id_proveedor='$this->empresa',titulo='$this->nombre', autor='$this->autor',clasificacion='$this->clasificacion',costocompra='$this->compra',costoventa='$this->venta',stock='$this->stock',fecha='$this->fecha', imagen='$this->imagen' where id_producto='$this->id'");
      return ($sql);
  }

//utilizo en ventas
  public function listarProducto(){
   include ("conexion.php");
   $db = new Conexion();
   $sql = $db->query("SELECT pr.id_proveedor, pr.empresa, p.* FROM producto p INNER JOIN proveedor pr ON p.id_proveedor=pr.id_proveedor order by p.titulo ");
   return($sql);
  }
  public function conexionVenta(){
   include ("conexion.php");
  }
  public function listarProductoId2($id){
   //include ("conexion.php");
   $db = new Conexion();
   $sql = $db->query("SELECT * from producto where id_producto='$id'");
   return($sql);
  }



   public function setId($id)
   {
    $this->id=$id;
   }
   public function getId(){
    return $this->id;
   }
   public function setEmpresa($ca)
   {
    $this->empresa=$ca;
   }
   public function getEmpresa()
   {
    return $this->empresa;
   }
   public function setNombre($ci)
   {
    $this->nombre=$ci;
   }
   public function getNombre()
   {
    return $this->nombre;
   }
   public function setAutor($au)
   {
    $this->autor=$au;
   }
   public function getAutor()
   {
    return $this->autor;
   }
   public function setClasificacion($cl)
   {
    $this->clasificacion=$cl;
   }
   public function getClasificacion()
   {
    return $this->clasificacion;
   }
   public function setCompra($pa)
   {
    $this->compra=$pa;
   }
   public function getCompra()
   {
    return $this->compra;
   }
   public function setVenta($ma)
   {
    $this->venta=$ma;
   }
   public function getVenta()
   {
    return $this->venta;
   }
   public function setStock($di)
   {
    $this->stock=$di;
   }
   public function getStock()
   {
    return $this->stock;
   }
   public function setFecha($fe)
   {
    $this->fecha=$fe;
   }
   public function getFecha()
   {
    return $this->fecha;
   }
   public function setImagen($im)
   {
    $this->imagen=$im;
   }
   public function getImagen()
   {
    return $this->imagen;
   }
}
?>