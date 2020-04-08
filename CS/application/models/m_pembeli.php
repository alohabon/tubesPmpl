<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pembeli extends CI_Model
{

	public function getRows()
	{
		$query = $this->db->query('SELECT * from pembeli');
 		return $query->num_rows() + 1;
	}

	public function get_data()
	{
		$query = $this->db->query('SELECT * from pembeli');
		return $query->result();
	}

	public function tambah($data)
	{
		$this->db->insert('pembeli', $data);
		return $kdPembeli;
	}

}


?>
