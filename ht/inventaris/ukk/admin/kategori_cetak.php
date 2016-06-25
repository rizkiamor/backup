<?php
@require('../pdf/fpdf.php');
include"../koneksi.php";

$pdf=new fpdf;

$pdf->AddPage('P','A4');

$pdf->SetTextColor(0,0,100);
$pdf->SetFont('times','','14');
$pdf->Cell('0','6','LAPORAN INVENTORIS','0',1,'C');
$pdf->Cell('0','6','PT. KRAKATAU','0',1,'C');

$pdf->SetFont('times','','10');
$pdf->Cell('0','6','Jl. Raya surabaya - semarang ','0',1,'C');
$pdf->Cell('190','5','','B','','');
$pdf->Ln(10);
$pdf->SetTextColor(0,0,100);
$pdf->SetFont('times','','20');
$pdf->Cell('0','5','KATEGORI','0','1','C');
$pdf->Ln(10);

$pdf->SetFont('Arial','B','10');
$pdf->Cell(30,5,'Kode Kategori','LTBR',0,'C');
$pdf->Cell(30,5,'Jenis Alat','LTBR',0,'C');
$pdf->Ln();

$hasil1=mysql_query("select * from kategori order by kd_kategori asc");
while($data=mysql_fetch_array($hasil1))
{
$pdf->SetFont('Arial','','10');
$pdf->SetTextColor(128);
$pdf->Cell(30,10,$data['kd_kategori'],'LBR',0,'C');
$pdf->Cell(30,10,$data['jenis_alat'],'LBR',0,'C');
$pdf->Ln();		
}

$pdf->Ln(3);
$pdf->SetTextColor(0,0,100);
$pdf->SetFont('times','','10');

$pdf->Output();
?>