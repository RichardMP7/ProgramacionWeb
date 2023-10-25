<?php

require('../fpdf/fpdf.php');
require('01_Configuracion.php');

date_default_timezone_get("America/Bogota");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('../images/Logo_unad.png',10,10,-550);
$pdf->ln(20);
$pdf->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
$pdf->ln(10);
$pdf->Cell(100,20,utf8_decode('REPORTE INVENTARIO DE PRODUCTOS'));
$pdf->ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,20,'CODIGO PRODUCTO');
$pdf->Cell(40,20,'NOMBRE PRODUCTO');
$pdf->Cell(30,20,'MARCA');
$pdf->Cell(40,20,'PRECIO COMPRA');
$pdf->Cell(30,20,'CANTIDAD PRODUCTO');
$pdf->ln(10);
$pdf->SetFont('Arial','',8);

$query_select = 'SELECT * FROM tabla25';
$result = mysqli_query($conn, $query_select);

if (mysqli_num_rows ($result)>0) {
    while ($reg = mysqli_fetch_assoc($result)) {
        $pdf->Cell(20,20,$reg['id'],0);
        $pdf->Cell(20,15,utf8_decode($reg['Cod_Prod']),0);
        $pdf->Cell(40,15,utf8_decode($reg['Nombre_Prod']),0);
        $pdf->Cell(30,15,utf8_decode($reg['Marca_Prod']),0);
        $pdf->Cell(40,15,utf8_decode($reg['Precio_Compra']),0);
        $pdf->Cell(30,15,utf8_decode($reg['Cantidad_Prod']),0);
        $pdf->ln(10);
    }
}
$pdf->Output();
mysqli_close($conn);
?>
