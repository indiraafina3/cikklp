<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function GetMahasiswa()
	{
		$data= $this->db->query('select * from mhs');
		return $data->result_array();
	}
	public function insertData($tableName,$data)
	{
		$res = $this->db->insert($tableName,$data);
		return $res;
	}
	public function deleteData($tableName,$where)
	{
		$res = $this->db->delete($tableName,$where);
		return $res;
	}
	public function delete_sp($tableName,$where)
	{
		$res = $this->db->delete($tableName,$where);
		return $res;
	}
	public function ambil_where($where="")
	{
		$data= $this->db->query('select * from mhs '.$where);
		return $data->result_array();
	}

	public function Get_sp($where="")
	{
		$data= $this->db->query('select * from suratpengantar');
		return $data->result_array();
	}

	public function updateData($tableName,$data,$where)
	{
		$res = $this->db->update($tableName,$data,$where);
		return $res;
	}
	public function getmhs()
	{
		$res = $this->db->query('select * from mhs');
		return $res->result_array();
	}

	public function getkklp()
	{
		$res= $this->db->query('select * from kklp');
		return $res->result_array();
	}

	public function insertkklp($tableName,$data)
	{
		$res = $this->db->insert($tableName,$data);
		return $res;
	}

	public function insert_sp($tableName,$data)
	{
		$res = $this->db->insert($tableName,$data);
		return $res;
	}

	public function deletekklp($tableName,$where)
	{
		$res = $this->db->delete($tableName,$where);
		return $res;
	}

	public function ambil_kklp($where="")
	{
		$data= $this->db->query('select * from kklp '.$where);
		return $data->result_array();
	}
	public function updatekklp($tableName,$data,$where)
	{
		$res = $this->db->update($tableName,$data,$where);
		return $res;
	}

	function can_login ($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('user');

		if ($query->num_rows() > 0) {
			return true;
		}
		else
		{
			return false;
			
	}
		}

}
