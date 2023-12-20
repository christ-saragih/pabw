<?php 

class Crud extends CI_Controller {

    public function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->helper('url');
	}

    public function index() {
        // echo "Ini adalah method index di controller Crud.";
        $data["user"] = $this->m_data->tampil_data()->result();
        $this->load->view("v_tampil", $data);
    }

    public function tambah() {
        $this->load->view("v_input");
    }

    public function tambah_aksi() {
        $nama = $this->input->post("nama");
        $alamat = $this->input->post("alamat");
        $pekerjaan = $this->input->post("pekerjaan");

        $data = array(
            "nama" => $nama,
            "alamat" => $alamat,
            "pekerjaan" => $pekerjaan
        );

        $this->m_data->input_data($data, "user");
        redirect("crud/index");
    }

    public function edit($id) {
        $where = array("id" => $id);
        $data["user"] = $this->m_data->edit_data($where, "user")->result();
        $this->load->view("v_edit", $data);
    }

    public function update() {
        $id = $this->input->post("id");
        $nama = $this->input->post("nama");
        $alamat = $this->input->post("alamat");
        $pekerjaan = $this->input->post("pekerjaan");

        $data = array(
            "nama" => $nama,
            "alamat" => $alamat,
            "pekerjaan" => $pekerjaan
        );

        $where = array(
            "id" => $id
        );

        $this->m_data->update_data($where, $data, "user");
        redirect("crud/index");
    }

    public function hapus($id) {
        $where = array("id" => $id);
        $this->m_data->hapus_data($where, "user");
        redirect("crud/index");
    }



}


?>