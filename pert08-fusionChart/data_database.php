<?php 

$server = "localhost";
$username = "root";
$password = "";
$db = "pabw";
$koneksi = mysqli_connect($server, $username, $password, $db);

$hasil = mysqli_query($koneksi, "SELECT * FROM tbl_revenue");

$data = array();
while ($record = mysqli_fetch_assoc($hasil)) {
    array_push($data, array("label"=>$record["bulan"], "value"=>$record["revenue"]));
}

// $array_to_json = json_encode($data);
// echo $array_to_json;

$chart = array(
    "caption"=>"Monthly revenue",
    "subCaption"=>"TRPL Mart",
    "xAxisName"=>"Month",
    "yAxisName"=>"Revenues",
    "theme"=>"fint"
);

$gabungan = array("chart"=>$chart, "data"=>$data);
$array_to_json = json_encode($gabungan);
echo $array_to_json;





?>