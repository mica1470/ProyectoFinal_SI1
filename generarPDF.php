<?php
//Incluimos el fichero de conexion
include_once("db.php");
//Incluimos la libreria PDF
include_once('pdf/fpdf.php');

class PDF extends FPDF
{
// Funcion encargado de realizar el encabezado
function Header()
{
// Logo
$this->SetFont('Arial','B',18);
// Move to the right
$this->Cell(80);
// Title
$this->Cell(95,10,'Listado de Pacientes',1,0,'C');
// Line break
$this->Ln(20);
}
// Funcion pie de pagina
function Footer()
{
// Position at 1.5 cm from bottom
$this->SetY(-15);
// Arial italic 8
$this->SetFont('Arial','I',8);
// Page number
$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
session_start();
$DateAndTime = date('m-d-Y h:i a', time());
$display_heading = array('id_paciente'=>'ID', 'DNI'=> 'DNI', 'nombre_paciente'=> 'Nombre','obra_social'=> 'Obra Social','descripcion_atencion'=>'Descripcion general','$DateAndTime'=> 'Fecha de Traslado');

   
$result = mysqli_query($conexion, "SELECT id, DNI, nombre_paciente, obra_social, descripcion_atencion FROM formulario_1 WHERE nombre_paciente!=' ' and CUIL='$_SESSION[CUIL]'") or die("database error:". mysqli_error($conexion));

$header = mysqli_query($conexion, "SHOW columns FROM formulario_1");

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',10);

// Declaramos el ancho de las columnas
$w = array(5, 15, 32, 21,120);

//Declaramos el encabezado de la tabla

$pdf->Cell(5,12,'ID',1);
$pdf->Cell(15,12,'DNI',1);
$pdf->Cell(32,12,'Nombre',1);
$pdf->Cell(21,12,'Obra Social',1);
$pdf->Cell(120,12,'Descripcion general',1);
$pdf->Ln();
$pdf->SetFont('Arial','',8);
//Mostramos el contenido de la tabla
$contador=0;
foreach($result as $row)
{
    $contador++;
$pdf->Cell($w[0],20,$contador,1,0);
$pdf->Cell($w[1],20,$row['DNI'],1,0);
$pdf->Cell($w[2],20,$row['nombre_paciente'],1,0);
$pdf->Cell($w[3],20,$row['obra_social'],1,0);
$pdf->Cell($w[4],20,$row['descripcion_atencion'],1,0,'J');
$pdf->Ln();
}
$pdf->Output();
?>