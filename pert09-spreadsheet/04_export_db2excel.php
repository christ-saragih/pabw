<?php 

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; 

// Creates New Spreadsheet 
$spreadsheet = new Spreadsheet(); 

$sheet = $spreadsheet->getActiveSheet();

$column_header = ["Bulan", "Tahun", "Revenue"];
$j = 1;
foreach($column_header as $x_value){
    $sheet->setCellValueByColumnAndRow($j,1,$x_value);
    $j++;
}

// ambil data dari database
$koneksi = mysqli_connect("localhost", "root", "", "pabw");

$sql = "SELECT * FROM `tbl_revenue`";
$getAllData = mysqli_query($koneksi, $sql);

$i=2; // baris. data dimasukkan dimulai dari baris ke dua, karena baris yang pertama udah dipake header
while($record = mysqli_fetch_assoc($getAllData)) {
    print_r($record);
    $sheet->setCellValueByColumnAndRow(1,$i,$record["bulan"]);
    $sheet->setCellValueByColumnAndRow(2,$i,$record["tahun"]);
    $sheet->setCellValueByColumnAndRow(3,$i,$record["revenue"]);
    $i++;
}


// Write an .xlsx file  
$writer = new Xlsx($spreadsheet); 
  
// Save .xlsx file to the files directory 
$writer->save('export_data.xlsx'); 

?>