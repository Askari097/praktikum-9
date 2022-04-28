<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;

        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        $this->load->model('mahasiswa_model');
        $siswa = $this->mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;

        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer');
    }



    // Method Dosen
    public function index_dosen(){
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;

        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index_dosen', $data);
        $this->load->view('layouts/footer');
    }
    public function detail_dosen($id){
        $this->load->model('dosen_model');
        $pengajar = $this->dosen_model->getById($id);
        $data['pengajar'] = $pengajar;

        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail_dosen', $data);
        $this->load->view('layouts/footer');
    }




    // Method matakuliah
    public function index_matakuliah(){
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;

        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index_matakuliah', $data);
        $this->load->view('layouts/footer');
    }
    
}
?>