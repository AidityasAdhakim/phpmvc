<?php 
class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAll();
        $this->view('template/header');
        $this->view('mahasiswa/index', $data);
        $this->view('template/footer');
    }
}
