<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class donor extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($table,$data)
	{
		
		$query = $this->db->insert($table, $data);
		return $query;
	}

	public function select($table,$where)
	{
		return $query = $this->db->get_where($table, $where);
	}

	public function selectAll($table)
	{
		return $query = $this->db->get($table);
	}

	public function update($table,$where,$id)
	{
		return $query = $this->db->update($table, $where, $id);
	}

	public function delete($table,$where)
	{
		return $query = $this->db->delete($table, $where);
	}

	public function selectLimit($table,$data,$limit,$offset)
	{
	return $query = $this->db->order_by('id', 'desc')->get_where($table, $data, $limit,$offset);	
	}

    public function proseslogin($email,$password)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where(array('email'=> $email,
							   'password' => SHA1($password)));
		//$this->db->where('password', SHA1($password));
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}

	public function get_by_user()
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->like('level', 'user');
		$query = $this->db->get();
        return $query->result();
	}

	public function get_jadwal_query()
	{
		$this->db->select('tb_donor.*, tb_jadwal.lokasi');
		$this->db->from('tb_donor');
		$this->db->join('tb_jadwal', 'tb_jadwal.id_jadwal = tb_donor.id_jadwal','left');
		$this->db->order_by('lokasi', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_jadwal2_query()
	{
		$this->db->order_by('lokasi', 'ASC');
		$query = $this->db->get('tb_jadwal');
		return $query->result();
	}
}