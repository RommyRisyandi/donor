<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model('donor', TRUE);
    
}
public function login()
	{
		$data['title'] = " LOGIN | Sistem Informasi Manajemen Donor Darah";
		$this->load->view('user/login', $data);
	}

public function daftar()
{
    $data['title'] = " DAFTAR | Sistem Informasi Manajemen Donor Darah";
    $this->load->view('user/daftar', $data);
    
}

public function adaftar()
{
    $data = array('nama' => $this->input->post('nama'),
                  'nik' => $this->input->post('nik'),
                  'email' => $this->input->post('email'),
                  'password' => SHA1($this->input->post('password')),
                  'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                  'tempat_lahir' => $this->input->post('tempat_lahir'),
                  'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                  'alamat' => $this->input->post('alamat'),
                  'no_telpon' => $this->input->post('no_telpon'),
                  'berat_badan' => $this->input->post('berat_badan'),
                  'tinggi_badan' => $this->input->post('tinggi_badan'),
                  'golongan_darah' => $this->input->post('golongan_darah'),
                  'level'   => $this->input->post('level'));
    $query = $this->donor->insert('tb_user', $data);
    $this->session->set_flashdata('sukses', 'Registrasi berhasil, Silahkan Login');
    redirect('user/login','refresh');
    
}



}