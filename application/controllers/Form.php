<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model(array('donor'));
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->library('session');
	
	if($this->session->userdata('level')!="user") {
		redirect('user/login','refresh');
	}
	
}
	public function index()
	{
		$data['title'] = " SIMANDAR | Sistem Informasi Manajemen Donor Darah";
		$this->load->view('form/layout/head', $data);
		$this->load->view('form/layout/navbar');
		$this->load->view('form/layout/sidebar');
		$this->load->view('form/index');
		$this->load->view('form/layout/footer');
	}

	public function profil()
	{
		$data['title'] = " PROFIL | Sistem Informasi Manajemen Donor Darah";
		// $data['tb_user'] = $this->donor->cekData(['email' => $this->session->userdata('email')])->row_array();
		// $this->data['donor'] = $this->db->get('tb_user')->result_array();
		$this->load->view('form/layout/head', $data);
		$this->load->view('form/layout/navbar');
		$this->load->view('form/layout/sidebar');
		$this->load->view('form/profil', $data);
		$this->load->view('form/layout/footer');
	}

	public function jadwal()
     {
        $data['title'] = " SI MANDAR | Data Jadwal Gerai Donor";
        $data['jadwal'] = $this->donor->selectAll('tb_jadwal')->result_object();
        $this->load->view('form/layout/head2', $data);
		$this->load->view('form/layout/navbar');
		$this->load->view('form/layout/sidebar');
		$this->load->view('form/jadwal');
		$this->load->view('form/layout/footer2');
     }
	public function kebutuhan()
     {
        $data['title'] = " SI MANDAR | Data Jadwal Gerai Donor";
        $data['kebutuhan'] = $this->donor->selectAll('tb_kebutuhan')->result_object();
        $this->load->view('form/layout/head2', $data);
		$this->load->view('form/layout/navbar');
		$this->load->view('form/layout/sidebar');
		$this->load->view('form/kebutuhan');
		$this->load->view('form/layout/footer2');
     }

	public function riwayat()
	{
		$data['title'] = " SI MANDAR | Data Riwayat Donor";
		// $data['donor'] = $this->donor->selectAll('tb_donor')->result_object();
		$data['jadwal'] = $this->donor->get_jadwal_query();
		$this->load->view('form/layout/head2', $data);
		$this->load->view('form/layout/navbar');
		$this->load->view('form/layout/sidebar');
		$this->load->view('form/riwayat');
		$this->load->view('form/layout/footer2');
	}

	public function stok()
     {
        $data['title'] = " SI MANDAR | Data Stok Darah";
        $data['stok'] = $this->donor->selectAll('tb_stok')->result_object();
        $this->load->view('form/layout/head2', $data);
		$this->load->view('form/layout/navbar');
		$this->load->view('form/layout/sidebar');
		$this->load->view('form/stok');
		$this->load->view('form/layout/footer2');
     }

	// Form Informasi & Edukasi
	public function info()
     {	
        $data['title'] = " SI MANDAR | Informasi & Edukasi";
        $data['berita'] = $this->donor->selectAll('tb_berita')->result_object();
        $this->load->view('form/layout/head2', $data);
		$this->load->view('form/layout/navbar');
		$this->load->view('form/layout/sidebar');
		$this->load->view('form/info/info');
		$this->load->view('form/layout/footer2');
     }
	
	public function detail($id_berita)
     {
        $data['title'] = "SI MANDAR | Selengkapnya....";
		$data['r'] = $this->donor->select('tb_berita', array('id_berita' => $id_berita))->row();
        $this->data['donor'] = $this->db->get('tb_berita')->result_array();
        $this->load->view('form/layout/head2', $data);
		$this->load->view('form/layout/navbar');
		$this->load->view('form/layout/sidebar');
		$this->load->view('form/info/detail');
		$this->load->view('form/layout/footer2');
     }

	public function logout()
	{
		$this->session->set_userdata('email', FALSE);
		$this->session->sess_destroy();
		redirect('user/login');
	}
}