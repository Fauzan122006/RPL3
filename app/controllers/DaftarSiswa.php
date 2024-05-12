<?php

class DaftarSiswa extends Controller
{
    public function index()
    {

        $data['judul'] = "Daftar Siswa";
        $data['getsiswa'] = $this->model('siswa_models')->getAllSiswa();

        $this->view('templates/header', $data);
        $this->view('daftarsiswa/index', $data);
        $this->view('templates/footer', $data);
    }
}