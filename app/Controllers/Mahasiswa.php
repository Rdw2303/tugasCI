<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Modelmahasiswa;
 class Mahasiswa extends BaseController 
 {
    function __construct(){
        $this->model = new \App\Models\Modelmahasiswa();
    }
    
    public function index(){
        $siswa = new Modelmahasiswa();
        $data_siswa = $siswa->findAll();
        return view('viewSiswaIndex',['data_siswa' =>$data_siswa]);
    }
    public function add_siswa(){
        return view ('add');
    }
    public function edit_siswa($id = false){
       $siswa = new Modelmahasiswa();
       $data_siswa = $siswa->find($id);
       return view ('edit',['data_siswa'=>$data_siswa]);
    }
    public function proses_add_tamu(){
        $siswa = new Modelmahasiswa();
        $siswa->insert($this->request->getPost());
        return redirect()->to(base_url('/'));
    }
    public function proses_edit_tamu(){
        $siswa = new Modelmahasiswa();
        $siswa->update($this->request->getPost('id'),$this->request->getPost());
        return redirect()->to(base_url('/'));
    }
    public function hapus_siswa($id = false){
        $siswa = new Modelmahasiswa();
        $siswa->delete($id);
        return redirect()->to(base_url('/'));
    }
 }
    