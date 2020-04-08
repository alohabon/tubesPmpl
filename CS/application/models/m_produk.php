<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_produk extends CI_Model
{


	public function get_data()
	{
		$query = $this->db->query('SELECT * from produk');
		return $query->result();
	}

	public function get_data_bykode($kdProduk) {
        $query = $this->db->get_where('produk', array('kdProduk' => $kdProduk));
        return $query->result();
    }

	public function tambah($data)
	{

		$query = $this->db->get_where('produk', array('kdProduk' => $data['kdProduk']));
 		$confirm = $query->num_rows();
		if($confirm==0){
			$this->db->insert('produk', $data);
			return TRUE;
		} else {
			return FALSE;
		}	
	}

	public function hapus($data)
	{
		$confirm = $this->db->query("DELETE FROM produk WHERE kdProduk = '".$data."';");
		if($confirm){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function edit($data)
	{
		$this->db->where('kdProduk', $data['kdProduk']);
		$confirm = $this->db->update('produk', $data);
		if($confirm){
			return TRUE;
		} else {
			return FALSE;
		}
	}
}


?>
