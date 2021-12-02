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
$display_heading = array('id_paciente'=>'ID', 'DNI'=> 'DNI', 'nombre_paciente'=> 'Nombre','obra_social'=> 'Obra Social','$DateAndTime'=> 'Fecha de Traslado');

   
$result = mysqli_query($conexion, "SELECT id, DNI, nombre_paciente, obra_social FROM formulario_1 WHERE nombre_paciente!=' ' and CUIL='$_SESSION[CUIL]'") or die("database error:". mysqli_error($conexion));

$header = mysqli_query($conexion, "SHOW columns FROM formulario_1");

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',14);
// Declaramos el ancho de las columnas
$w = array(15, 80, 50, 30);
//Declaramos el encabezado de la tabla

$pdf->Cell(15,12,'ID',1);
$pdf->Cell(80,12,'DNI',1);
$pdf->Cell(50,12,'Nombre del paciente',1);
$pdf->Cell(30,12,'Obra Social',1);
$pdf->Ln();
$pdf->SetFont('Arial','',12);
//Mostramos el contenido de la tabla
foreach($result as $row)
{
$pdf->Cell($w[0],6,$row['id'],1);
$pdf->Cell($w[1],6,$row['DNI'],1);
$pdf->Cell($w[2],6,$row['nombre_paciente'],1);
$pdf->Cell($w[3],6,$row['obra_social'],1);
$pdf->Ln();
}
$pdf->Output();
?>