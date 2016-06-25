<?php
@require('../pdf/fpdf.php');
include"../koneksi.php";

$pdf=new fpdf;
$pdf->AddPage('P','A4');
$pdf->SetTextColor(0,0,100);
$pdf->SetFont('times','','14');
$pdf->Cell('0','6','LAPORAN PEMINJAM','0',1,'C');
$pdf->Cell('0','6','PT. KRAKATAU','0',1,'C');

$pdf->SetFont('times','','10');
$pdf->Cell('0','6','Jl. Raya surabaya - semarang ','0',1,'C');
$pdf->Cell('190','5','','B','','');
$pdf->Ln(10);
$pdf->SetTextColor(0,0,100);
$pdf->SetFont('times','','20');
$pdf->Cell('0','5','PEMINJAM','0','1','C');
$pdf->Ln(10);

$pdf->SetFont('Arial','B','10');
$pdf->Cell(30,5,'Kode Inventaris','LTBR',0,'C');
$pdf->Cell(30,5,'Kode Karyaan','LTBR',0,'C');
$pdf->Cell(30,5,'Kode Petugas','LTBR',0,'C');
$pdf->Cell(30,5,'Tanggal Pinjam','LTBR',0,'C');
$pdf->Cell(30,5,'Label Alat','LTBR',0,'C');
$pdf->Ln();

$hasil1=mysql_query("select A.*,B.* from detail_inventaris A, inventaris B where A.kd_inventaris=B.kd_inventaris ");
while($data=mysql_fetch_array($hasil1))
{
$pdf->SetFont('Arial','','10');
$pdf->SetTextColor(128);
$pdf->Cell(30,10,$data['kd_inventaris'],'LBR',0,'C');
$pdf->Cell(30,10,$data['kd_karyawan'],'LBR',0,'C');
$pdf->Cell(30,10,$data['kd_petugas'],'LBR',0,'C');
$pdf->Cell(30,10,$data['tgl_pinjam'],'LBR',0,'C');
$pdf->Cell(30,10,$data['label_alat'],'LBR',0,'C');
$pdf->Ln();		
}

$pdf->Ln(3);
$pdf->SetTextColor(0,0,100);
$pdf->SetFont('times','','10');

$pdf->Output();
?>