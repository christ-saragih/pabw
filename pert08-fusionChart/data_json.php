<?php

$chart = array(
    "caption"=>"Monthly revenue",
    "subCaption"=>"TRPL Mart",
    "xAxisName"=>"Month",
    "yAxisName"=>"Revenues",
    "theme"=>"fint"
);

$data = array(
    array("label"=>"Jan", "value"=>"120"),
    array("label"=>"Feb", "value"=>"170"),
    array("label"=>"Mar", "value"=>"135"),
    array("label"=>"Apr", "value"=>"110"),
    array("label"=>"Mei", "value"=>"160")
);

$gabungan = array("chart"=>$chart, "data"=>$data);
$array_to_json = json_encode($gabungan);
echo $array_to_json;

?>