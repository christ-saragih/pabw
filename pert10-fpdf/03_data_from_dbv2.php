<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
    // Title
    $this->SetFont('Arial','',18);
    $this->Cell(0,6,'DATA REVENUE',0,1,'C');
    $this->Ln(10);
    // Ensure table header is printed
    parent::Header();
}
}

// Connect to database
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "pabw";
$link = mysqli_connect($host, $user, $pass, $dbnm);

$pdf = new PDF();
$pdf->AddPage();
// First table: output all columns
// $pdf->Table($link,'select bulan,tahun,revenue from tbl_revenue');
// $pdf->AddPage();

// Second table: specify 3 columns
$pdf->AddCol('bulan',20,'BULAN','C');
$pdf->AddCol('tahun',20,'TAHUN','C');
$pdf->AddCol('revenue',25,'REVENUE','C');
$prop = array('HeaderColor'=>array(255,150,100),
            'color1'=>array(210,245,255),
            'color2'=>array(255,255,210),
            'padding'=>2);
$pdf->Table($link,'select bulan,tahun,revenue from tbl_revenue',$prop);
$pdf->Output();
?>