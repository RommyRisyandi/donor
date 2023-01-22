<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

     public function __construct()
     {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model(array('donor'));
        $this->load->library('session');

        if($this->session->userdata('level')!="admin") {
            redirect('user/login','refresh');
        }
        
     }
     
     public function index()
     {
        $data['title'] = " SI MANDAR | Sistem Informasi Manajemen Donor Darah";
		$this->load->view('admin/layout/head', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/index');
		$this->load->view('admin/layout/footer');
     }

     public function pendonor()
     {
        $data['title'] = " SI MANDAR | Data Pendonor";
        $data['user'] = $this->donor->get_by_user();
        $this->load->view('admin/layout/head2', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/pendonor');
		$this->load->view('admin/layout/footer2');
     }

     //FORM JADWAL
     public function jadwal()
     {
      $data['title'] = " SI MANDAR | Data Jadwal Gerai Donor";
      $data['jadwal'] = $this->donor->selectAll('tb_jadwal')->result_object();
      $this->load->view('admin/layout/head2', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/jadwal/jadwal');
		$this->load->view('admin/layout/footer2');
     }
     
     public function tambah()
     {
      $data['title'] = " SI MANDAR | Tambah Jadwal Gerai Donor";
      $this->load->view('admin/layout/head2', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/jadwal/tambah');
		$this->load->view('admin/layout/footer2');
     }

     public function atambah()
     {
        $data = array('hari'     => $this->input->post('hari'),
                      'tanggal'  => $this->input->post('tanggal'),  
                      'jam'      => $this->input->post('jam'),  
                      'lokasi'   => $this->input->post('lokasi'));
        
        $query = $this->donor->insert('tb_jadwal', $data);
        $this->session->set_flashdata('sukses', 'Upload Jadwal Berhasil!');
        redirect('admin/jadwal', 'refresh');
     }

     public function edit($id_jadwal)
     {
      $data['title'] = " SI MANDAR | Ubah Jadwal Gerai Donor";
      $data['r'] = $this->donor->select('tb_jadwal', array('id_jadwal' => $id_jadwal))->row();
      $this->data['donor'] = $this->db->get('tb_jadwal')->result_array();
      $this->load->view('admin/layout/head2', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/jadwal/edit');
		$this->load->view('admin/layout/footer2');
     }

     public function aedit()
     {
        $id_jadwal = array('id_jadwal' => $this->input->post('id_jadwala'));
        $data = array('hari'           => $this->input->post('hari'),
                      'tanggal'        => $this->input->post('tanggal'),  
                      'jam'            => $this->input->post('jam'),  
                      'lokasi'         => $this->input->post('lokasi'));
                      
            $query = $this->donor->update('tb_jadwal', $data, $id_jadwal);
            $this->session->set_flashdata('sukses', 'Update Jadwal Berhasil!');
            redirect('admin/jadwal', 'refresh');
     
    }

    public function hapus($id)
    {
        $data = array('id_jadwal' => $id);
        $query = $this->donor->delete('tb_jadwal', $data);
        $this->session->set_flashdata('sukses', 'Hapus Jadwal Berhasil!');
        redirect('admin/jadwal', 'refresh');

    }

   // FORM DATA KEBUTUHAN
   public function kebutuhan()
   {
      $data['title'] = " SI MANDAR | Data Kebutuhan";
      $data['kebutuhan'] = $this->donor->selectAll('tb_kebutuhan')->result_object();
      $this->load->view('admin/layout/head2', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/kebutuhan/kebutuhan');
		$this->load->view('admin/layout/footer2');
   }

   public function tambah_k()
   {
      $data['title'] = " SI MANDAR | Tambah Kebutuhan";
      $this->load->view('admin/layout/head2', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/kebutuhan/tambah');
		$this->load->view('admin/layout/footer2');
   }

   public function atambah_k()
   {
         $data = array('no_rm'           => $this->input->post('no_rm'),
                     'nama_os'           => $this->input->post('nama_os'),  
                     'alamat'            => $this->input->post('alamat'),  
                     'permintaan'        => $this->input->post('permintaan'),  
                     'golongan_darah'    => $this->input->post('golongan_darah'),  
                     'dokter'            => $this->input->post('dokter'));
      
      $query = $this->donor->insert('tb_kebutuhan', $data);
      $this->session->set_flashdata('sukses', 'Upload Kebutuhan Berhasil!');
      redirect('admin/kebutuhan', 'refresh');
   }

   public function edit_k($id_kebutuhan)
   {
   $data['title'] = " SI MANDAR | Ubah Kebutuhan";
   $data['r'] = $this->donor->select('tb_kebutuhan', array('id_kebutuhan' => $id_kebutuhan))->row();
   $this->data['donor'] = $this->db->get('tb_kebutuhan')->result_array();
   $this->load->view('admin/layout/head2', $data);
   $this->load->view('admin/layout/navbar');
   $this->load->view('admin/layout/sidebar');
   $this->load->view('admin/kebutuhan/edit');
   $this->load->view('admin/layout/footer2');
   }

   public function aedit_k()
   {
      $id_kebutuhan = array('id_kebutuhan' => $this->input->post('id_kebutuhana'));
      $data = array('no_rm'             => $this->input->post('no_rm'),
                     'nama_os'           => $this->input->post('nama_os'),  
                     'alamat'            => $this->input->post('alamat'),  
                     'permintaan'        => $this->input->post('permintaan'),  
                     'golongan_darah'    => $this->input->post('golongan_darah'),  
                     'dokter'            => $this->input->post('dokter'));
      
      $query = $this->donor->update('tb_kebutuhan', $data, $id_kebutuhan);
      $this->session->set_flashdata('sukses', 'Update Kebutuhan Berhasil!');
      redirect('admin/kebutuhan', 'refresh');
   }

   public function hapus3($id)
   {
      $data = array('id_kebutuhan' => $id);
      $query = $this->donor->delete('tb_kebutuhan', $data);
      $this->session->set_flashdata('sukses', 'Hapus Kebutuhan Berhasil!');
      redirect('admin/kebutuhan', 'refresh');

   }

   //  FORM BERITA
   public function berita()
   {
      $data['title'] = " SI MANDAR | Data Informasi & Edukasi";
      $data['berita'] = $this->donor->selectAll('tb_berita')->result_object();
      $this->load->view('admin/layout/head2', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/berita/berita');
		$this->load->view('admin/layout/footer2');
   }

   public function tambah_b() 
   {
      $data['title'] = " SI MANDAR | Tambah Informasi & Edukasi";
      $this->load->view('admin/layout/head3', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/berita/tambah');
		$this->load->view('admin/layout/footer3');
   }

   public function atambah_b()
   {
      $config['upload_path'] 		= './assets/upload/foto/';
      $config['allowed_types'] 	= 'gif|jpg|png';
      $config['max_size']  		= '2400';// dalam KB
      $config['max_width']  		= '2024';
      $config['max_height']  		= '2024';
      
      $this->load->library('upload', $config);
		
		if(!$this->upload->do_upload()){
      $this->session->set_flashdata('gagal', 'Mohon Maaf Upload Gambar Gagal, Silahkan Coba Lagi!(Max:2mb)');
      $data['title'] = " SI MANDAR | Tambah Informasi & Edukasi";
      $this->load->view('admin/layout/head3', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/berita/tambah');
		$this->load->view('admin/layout/footer3');
         

      }else{
         $foto = array('upload_data' => $this->upload->data());
         // Create Thumbnail Gambar
         $config['image_library'] = 'gd2';
         $config['source_image'] = './assets/upload/foto/'.$foto['upload_data']['file_name'];
         // Lokasi Folder Thumbnail
         $config['new_image'] = './assets/upload/foto/thumbs/'; 
         $config['create_thumb'] = TRUE;
         $config['maintain_ratio'] = TRUE;
         $config['width'] = 250; //pixel
         $config['height'] = 250; //pixel
         $config['thumb_marker'] ='';

		$this->load->library('image_lib', $config);

		$this->image_lib->resize();

      $data = array(
                    'judul'      => $this->input->post('judul'),
                    'tanggal'    => $this->input->post('tanggal'),
                    'isi'        => $this->input->post('isi'),
                    'foto'       => $foto['upload_data']['file_name']);
                    $this->donor->insert('tb_berita', $data);
                    $this->session->set_flashdata('sukses', 'Informasi & Edukasi Berhasil ditambah!');
                    redirect('admin/berita','refresh');
                    
      }
   }

   public function edit_b($id_berita)
     {
      $data['title'] = " SI MANDAR | Ubah Informasi & Edukasi";
      $data['r'] = $this->donor->select('tb_berita', array('id_berita' => $id_berita))->row();
      $this->data['donor'] = $this->db->get('tb_berita')->result_array();
      $this->load->view('admin/layout/head3', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/berita/edit');
		$this->load->view('admin/layout/footer3');
     }
   
   public function aedit_b()
   {

         $config['upload_path'] 		= './assets/upload/foto/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']  		= '2400';// dalam KB
			$config['max_width']  		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload()){
            $this->session->set_flashdata('gagal', 'Mohon Maaf Upload Gambar Gagal, Silahkan Coba Lagi!(Max:2mb)');
            redirect('admin/edit_b');
            
         }else{
            $foto = array('upload_data' => $this->upload->data());
   // Create Thumbnail Gambar
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/upload/foto/'.$foto['upload_data']['file_name'];
            // Lokasi Folder Thumbnail
            $config['new_image'] = './assets/upload/foto/thumbs/'; 
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 250; //pixel
            $config['height'] = 250; //pixel
            $config['thumb_marker'] ='';

		      $this->load->library('image_lib', $config);

		      $this->image_lib->resize();
	// End Create Thumbnail
            $id_berita = array('id_berita' => $this->input->post('id_beritaa'));
            $data = array(
                           'judul'      => $this->input->post('judul'),
                           'tanggal'    => $this->input->post('tanggal'),
                           'isi'        => $this->input->post('isi'),
                           'foto'       => $foto['upload_data']['file_name']);
            $this->donor->update('tb_berita', $data, $id_berita);
            $this->session->set_flashdata('sukses', 'Informasi & Edukasi Berhasil diupdate!');
            redirect('admin/berita','refresh');
         }
      
   }

   public function hapus2($id_berita)
   {
      $data = array('id_berita' => $id_berita);
      $query = $this->donor->delete('tb_berita', $data);
      $this->session->set_flashdata('sukses', 'Hapus Informasi & Edukasi Berhasil!');
      redirect('admin/berita', 'refresh');
   }
   // Form Riwayat Donor
   public function riwayat()
   {
      $data['title'] = " SI MANDAR | Data Riwayat Donor";
      // $data['donor'] = $this->donor->selectAll('tb_donor')->result_object();
      $data['jadwal'] = $this->donor->get_jadwal_query();
      $this->load->view('admin/layout/head2', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/riwayat/riwayat');
		$this->load->view('admin/layout/footer2');
   }
   
   public function tambah_r()
	{
		$data['title'] = "SI MANDAR | Tambah Riwayat Donor";
		$data['jadwal'] = $this->donor->get_jadwal2_query();
		$this->load->view('admin/layout/head2', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/riwayat/tambah',$data);
		$this->load->view('admin/layout/footer2');
	}

   public function atambah_r()
   {
         $data = array('nama'              => $this->input->post('nama'),
                       'golongan_darah'    => $this->input->post('golongan_darah'),  
                       'id_jadwal'            => $this->input->post('id_jadwal'));
      
      $query = $this->donor->insert('tb_donor', $data);
      $this->session->set_flashdata('sukses', 'Upload Riwayat Donor Berhasil!');
      redirect('admin/riwayat', 'refresh');
   }

   public function edit_r($id_donor)
   {
   $data['title'] = " SI MANDAR | Ubah Riwayat Donor";
   $data['r'] = $this->donor->select('tb_donor', array('id_donor' => $id_donor))->row();
   $this->data['donor'] = $this->db->get('tb_donor')->result_array();
   $data['jadwal'] = $this->donor->get_jadwal2_query();
   $this->load->view('admin/layout/head2', $data);
   $this->load->view('admin/layout/navbar');
   $this->load->view('admin/layout/sidebar');
   $this->load->view('admin/riwayat/edit');
   $this->load->view('admin/layout/footer2');
   }

   public function aedit_r()
   {
      $id_donor = array('id_donor' => $this->input->post('id_donora'));
      $data = array(   'nama'              => $this->input->post('nama'),
                       'golongan_darah'    => $this->input->post('golongan_darah'),  
                       'id_jadwal'            => $this->input->post('id_jadwal'));

      $query = $this->donor->update('tb_donor', $data, $id_donor);
      $this->session->set_flashdata('sukses', 'Update Riwayat Donor Berhasil!');
      redirect('admin/riwayat', 'refresh');
   }

   public function hapus4($id)
   {
      $data = array('id_donor' => $id);
      $query = $this->donor->delete('tb_donor', $data);
      $this->session->set_flashdata('sukses', 'Hapus Riwayat Donor Berhasil!');
      redirect('admin/riwayat', 'refresh');

   }

   // Form Stok
   public function stok()
   {
      $data['title'] = " SI MANDAR | Data Stok Darah";
      $data['stok'] = $this->donor->selectAll('tb_stok')->result_object();
      $this->load->view('admin/layout/head2', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/stok/stok');
		$this->load->view('admin/layout/footer2');
   }
   
   public function tambah_s()
	{
		$data['title'] = "SI MANDAR | Tambah Stok Darah";
		$data['jadwal'] = $this->donor->get_jadwal2_query();
		$this->load->view('admin/layout/head2', $data);
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/stok/tambah',$data);
		$this->load->view('admin/layout/footer2');
	}

   public function atambah_s()
   {
      $data = array(    'kode_darah'          => $this->input->post('kode_darah'),
                        'golongan_darah'      => $this->input->post('golongan_darah'),  
                        'keterangan'          => $this->input->post('keterangan'));
      
      $query = $this->donor->insert('tb_stok', $data);
      $this->session->set_flashdata('sukses', 'Upload Stok Darah Berhasil!');
      redirect('admin/stok', 'refresh');
   }

   public function edit_s($id_stok)
   {
   $data['title'] = " SI MANDAR | Ubah Stok Darah";
   $data['r'] = $this->donor->select('tb_stok', array('id_stok' => $id_stok))->row();
   $this->data['stok'] = $this->db->get('tb_stok')->result_array();
   $this->load->view('admin/layout/head2', $data);
   $this->load->view('admin/layout/navbar');
   $this->load->view('admin/layout/sidebar');
   $this->load->view('admin/stok/edit');
   $this->load->view('admin/layout/footer2');
   }

   public function aedit_s()
   {
      $id_stok = array('id_stok'             => $this->input->post('id_stoka'));
      $data = array(   'kode_darah'          => $this->input->post('kode_darah'),
                       'golongan_darah'      => $this->input->post('golongan_darah'),  
                       'keterangan'          => $this->input->post('keterangan'));

      $query = $this->donor->update('tb_stok', $data, $id_stok);
      $this->session->set_flashdata('sukses', 'Update Stok Darah Berhasil!');
      redirect('admin/stok', 'refresh');
   }

   public function hapus5($id)
   {
      $data = array('id_stok' => $id);
      $query = $this->donor->delete('tb_stok', $data);
      $this->session->set_flashdata('sukses', 'Hapus Stok Darah Berhasil!');
      redirect('admin/stok', 'refresh');

   }
    
   public function logout()
	{
		$this->session->set_userdata('email', FALSE);
		$this->session->sess_destroy();
		redirect('user/login');
	}
}