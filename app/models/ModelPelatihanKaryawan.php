<?php
// app/models/User.php
require_once '../config/database.php';

class PelatihanKaryawan extends Database {

    public function __construct() {
        parent::__construct();
    }
    
    public function tampil_data() {
        $query = $this->conn->query("SELECT * FROM pelatihan_karyawan");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function tambah_data() {
        $query = $this->conn->query("INSERT INTO pelatihan_karyawan (id_karyawan, id_pelatihan, tanggal, keterangan) 
        VALUES ('$_POST[id_karyawan]', '$_POST[id_pelatihan]', '$_POST[tanggal]', '$_POST[keterangan]')");
        return $query;
    }

    public function edit_data() {
        $query = $this->conn->query("UPDATE pelatihan_karyawan SET id_karyawan = '$_POST[id_pelatihan]', tanggal = '$_POST[tanggal]', keterangan = '$_POST[keterangan]' WHERE id_pelatihanKaryawan = '$_POST[id_pelatihanKaryawan]'");
        return $query;
    }

    public function hapus_data($id_pelatihanKaryawan) {
        $query = "DELETE FROM pelatihan_karyawan WHERE id_pelatihanKaryawan = :id_pelatihanKaryawan";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([':id_pelatihanKaryawan' => $id_pelatihanKaryawan]);
    }

    public function getDataById($id) {
        $query = $this->conn->query("SELECT * FROM pelatihan_karyawan WHERE id_pelatihanKaryawan = '$id'");
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
?>
