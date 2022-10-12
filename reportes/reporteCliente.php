<?php
    include "fpdf.php";
    require "../modelo/conexion.php";
    include "../modelo/clienteClase.php";

    class PDF extends FPDF 
{
    //cabecera de pagina
    function Header()
    {
        //Logo
        $this->Image('imagenes/logo.jpg',20,1,50);
        //Arial bold 15
        $this->SetFont('Arial','B',15);
        //Movernos a la derecha
        $this->Cell(60);
        //Título
        $this->Cell(120,25,'Reportes Clientes',1,1,'C');
        //Salto de linea
        $this->Ln(15);
    }


 //Pie de página
 function Footer()
 {
    //Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}       
}
// Creacion del objeto de la clase heredada
$pdf = new PDF();
$c=1;
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',10);
$pdf->Cell(20);
// $pdf->SetFillColor(98,170,254);
$pdf->SetFillColor(192,192,192);



    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10,'No',1,0,'C',1);
    $pdf->Cell(100,10,'RAZON SOCIAL',1,0,'C',1);
    $pdf->Cell(40,10,'CI / NIT',1,1,'C',1);

    $pdf->SetFont('Arial','',10);

    $cli=new Cliente("","","","");
    $resultado=$cli->reporte();
    while($row = $resultado->fetch_assoc())
    {
        $pdf->Cell(20);
        $pdf->Cell(20,6,utf8_decode($c),1,0,'C');
        $pdf->Cell(100,6,utf8_decode($row['razonsocial']),1,0,'C');
        $pdf->Cell(40,6,utf8_decode($row['nit_ci']),1,1,'C');

        $c++;
    }
    $pdf->Output();

?>