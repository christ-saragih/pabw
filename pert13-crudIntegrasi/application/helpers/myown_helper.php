<?php 

if( !defined("BASEPATH")) exit("No direct script access allowed" );

if( !function_exists("uji") ) {
    function uji($var = "") {
        print("Helper berupa fungsi -> bernama uji dijalankan (+100)");
        return $var + 100;
    }
}


?>