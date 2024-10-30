<?php

require_once '../app/models/ModelPelatihanKaryawan.php';

class ControllerPelatihanKaryawan {
    private $db;

    public function __construct() {
        $this->db = new PelatihanKaryawan();
    }

    public function index() {
        $data_pelatihan = $this->db->tampil_data();
        require_once "../app/views/pelatihan_karyawan/index.php";
    }

    public function create() {
        require_once '../app/views/pelatihan_karyawan/create.php';
    }

    public function store() {
        $this->db->tambah_data();
        header('location: index');
    }

    public function edit($id) {  

        $DataPelatihan = $this->db->getDataById($id);
        require_once '../app/views/pelatihan_karyawan/edit.php';
    }

    public function update() {
        $this->db->edit_data();
        header('location: /pelatihan_karyawan/index');
    }

    public function delete($id){
        $this->db->hapus_data($id);
        header('location: /pelatihan_karyawan/index');
    }
}
?>
