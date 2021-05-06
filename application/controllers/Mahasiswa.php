<?php

class Mahasiswa extends CI_Controller {
    // kalo mau semua pake database pada satu controller
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->database();
    // }

    // kalo mau semua pake model pada satu controller
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    
    }
    public function index()
    {
        // kalo mau ambil database per function
        // $this->load->database();

        $data['judul'] = 'Daftar Mahasiswa';

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
}