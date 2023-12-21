<?php 

    error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
    $pdf = new FPDF('L', 'mm', 'Letter');
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 7, 'FPDF DIPANGGIL', 0, 1, 'C');
    $pdf->Cell(10, 7, "", 0, 1);
    $pdf->SetFont('Arial', 'B',10);
    $pdf->Cell(10, 6, 'No', 1, 0, 'C');
    $pdf->Cell(90, 6, 'Nama Pegawai', 1, 0, 'C');
    $pdf->Cell(120, 6, 'Alamat', 1, 0, 'C');
    $pdf->Cell(40, 6, 'Telp', 1, 1, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Output();

?>