<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('donor');
    }

    public function proseslogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $ceklogin = $this->donor->proseslogin($email,$password);

        if($ceklogin){
            foreach ($ceklogin as $row) {
                 $this->session->set_userdata('nik', $row->nik);
                 $this->session->set_userdata('nama', $row->nama);
                 $this->session->set_userdata('email', $row->email);
                 $this->session->set_userdata('jenis_kelamin', $row->jenis_kelamin);
                 $this->session->set_userdata('tempat_lahir', $row->tempat_lahir);
                 $this->session->set_userdata('tanggal_lahir', $row->tanggal_lahir);
                 $this->session->set_userdata('alamat', $row->alamat);
                 $this->session->set_userdata('no_telpon', $row->no_telpon);
                 $this->session->set_userdata('berat_badan', $row->berat_badan);
                 $this->session->set_userdata('tinggi_badan', $row->tinggi_badan);
                 $this->session->set_userdata('golongan_darah', $row->golongan_darah);
                 $this->session->set_userdata('level', $row->level);

                 if($this->session->userdata('level')=="admin"){
                    redirect('admin/index');
                 }elseif($this->session->userdata('level')=="user"){
                    redirect('form/index');
                 }
            }
        }else{
            $data['title'] = "LOGIN | Sistem Informasi Manajemen Donor Darah";
            $data['pesan'] = "Maaf, Email atau Password anda Salah! Silahkan Coba Lagi";
            $this->load->view('user/login', $data);
            
        }
    }
}