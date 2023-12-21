<?php 

class C1 extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // yang url sudah dipanggil di autoload
        $this->load->helper("url");
        $this->load->helper("myown_helper");
        $this->load->library("myown_library");
        $this->load->library("pdf_ku");
    }

    public function index() {
        echo "Halo";
    }

    public function manggil_fungsi_helper() {
        $x = uji(9);
        echo "<br>$x";
    }

    public function manggil_method_library() {
        $this->myown_library->menyapa();
    }

    public function manggil_bootstrap() {
        $this->load->view("v_bootstrap");
    }

    public function manggil_grafik() {
        $this->load->view("v_grafik");
    }

    public function manggil_fpdf() {
        $this->load->view("v_fpdf");
    }
}



?>