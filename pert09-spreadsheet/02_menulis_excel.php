<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; 

// Creates New Spreadsheet 
$spreadsheet = new Spreadsheet(); 

// Get the first sheet in the workbook 
// Note that sheets are indexed from 0 
// $spreadsheet->getSheet(0);

// Retrieve the current active worksheet 
$sheet = $spreadsheet->getActiveSheet();

// datanya
$data_from_db=array();
$data_from_db[0]=array("name"=>"raja","age"=>23);
$data_from_db[1]=array("name"=>"raja1","age"=>43);

//set column header
//set your own column header
$column_header=["Name","Age"];
$j=1;
foreach($column_header as $x_value) {
		$sheet->setCellValueByColumnAndRow($j,1,$x_value);
  		$j=$j+1;
  		
	}

//set value row
for($i=0;$i<count($data_from_db);$i++)
{

//set value for indi cell
$row=$data_from_db[$i];

//writing cell index start at 1 not 0
$j=1;

	foreach($row as $x => $x_value) {
		$sheet->setCellValueByColumnAndRow($j,$i+2,$x_value);
  		$j=$j+1;
	}
}

// Write an .xlsx file  
$writer = new Xlsx($spreadsheet); 
  
// Save .xlsx file to the files directory 
$writer->save('demo.xlsx'); 