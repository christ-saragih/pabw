<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
$reader = new PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$spreadsheet = $reader->load("data01.xlsx");
$sheet01 = $spreadsheet->getSheet(0)->toArray();

foreach ($sheet01 as $s) {
    echo $s[0].'---'.$s[1].'---'.$s[2].'<br>';
}

$getAllNameSheet = $spreadsheet->getSheetNames();
print_r($getAllNameSheet);