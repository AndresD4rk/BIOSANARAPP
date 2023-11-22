<?php
// Incluir la clase FPDF
include "../process/conexion.php";
require('fpdf.php');

//Crear una instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Configurar fuente y tamaño
$pdf->SetFont('Arial', 'B', 16);

// Títulos
$pdf->Cell(40, 10, $row['idrep'], 1);
$pdf->Cell(60, 10, $row['idcompu'], 1);
$pdf->Cell(80, 10, $row['serie'], 1);
$pdf->Cell(40, 10, $row['marca'], 1);
$pdf->Cell(60, 10, $row(['prinom'] . " " . $row['segnom']), 1);
$pdf->Cell(60, 10, $row(['priape'] . " " . $row['segape']), 1);
$pdf->Cell(80, 10, $row['detpro'], 1);
$pdf->Ln(); // Salto de línea

// Recuperar datos de la base de datos
$query = ("SELECT r.idrep, c.idcompu, d.serie, d.marca, u.prinom, u.segnom, u.priape, u.segape, r.detpro
FROM reportes r
Inner join computador c on r.idcom=c.idcompu
Inner Join usuario u on r.idusu=u.idusu
Inner Join det d on r.iddet=d.iddetcom");
$result = $conn->query($query);

// Agregar filas al PDF
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(40, 10, $row['idrep'], 1);
    $pdf->Cell(60, 10, $row['idcompu'], 1);
    $pdf->Cell(80, 10, $row['serie'], 1);
    $pdf->Cell(40, 10, $row['marca'], 1);
    $pdf->Cell(60, 10, $row(['prinom'] . " " . $row['segnom']), 1);
    $pdf->Cell(60, 10, $row(['priape'] . " " . $row['segape']), 1);
    $pdf->Cell(80, 10, $row['detpro'], 1);
    $pdf->Ln(); // Salto de línea
}

// Salida del PDF
$pdf->Output('archivo.pdf', 'D');
