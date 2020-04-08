<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pegawai extends CI_Model{

	public function get_data()
	{
		$query = $this->db->query('SELECT kdPegawai, nama, alamat, pekerjaan from pegawai');
		return $query->result();
	}

	public function tambah($data)
	{
		$query = $this->db->get_where('pegawai', array('kdPegawai' => $data['kdPegawai']));
 		$confirm = $query->num_rows();
		if($confirm==0){
			$this->db->insert('pegawai', $data);
			return TRUE;
		} else {
			return FALSE;
		}		
	}

	public function hapus($data)
	{
		$confirm = $this->db->query("DELETE FROM pegawai WHERE kdPegawai = '".$data."';");
		if($confirm){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function edit($data)
	{
		$this->db->where('kdPegawai', $data['kdPegawai']);
		$confirm = $this->db->update('pegawai', $data);
		if($confirm){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function login($data)
	{
		$query = $this->db->query("SELECT pekerjaan FROM pegawai WHERE kdPegawai = '".$data['kdPegawai']."' and password = '".$data['password']."'");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return FALSE;
		}
	}

}


?>
