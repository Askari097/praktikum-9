<?php
class Matakuliah_model extends CI_Model {
    public $nama;
    public $sks;
    public $kode;

    public function getAll(){
        // menampilkan seluruh data yang ada didalam tabel mahasiswa
        $query = $this->db->get('matakuliah');
        return $query->result();
    }
   }
?>