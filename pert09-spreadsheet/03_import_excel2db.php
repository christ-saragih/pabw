<?php 

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
$reader = new PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$spreadsheet = $reader->load("import_data.xlsx");
$sheet01 = $spreadsheet->getSheet(0)->toArray();

$koneksi = mysqli_connect("localhost", "root", "", "pabw");

$jmlData = count($sheet01);
for ($i=1; $i < $jmlData; $i++) { 
    echo $insert = "INSERT INTO `tbl_revenue` (`id`, `bulan`, `tahun`, `revenue`)
                VALUES
               (NULL, '".$sheet01[$i][0]."', '".$sheet01[$i][1]."', '".$sheet01[$i][2]."')";
    echo "<br>";
    mysqli_query($koneksi, $insert);
}