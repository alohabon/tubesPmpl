<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_barang() {
        return $this->db->get('barang');
    }

    public function get_barang_byid($idbarang) {
        $query = $this->db->get_where('barang', array('idbarang' => $idbarang));
        return $query->row_array();
    }

	public function delete_barang($idbarang){
		$this->db->where('idbarang', $idbarang);
		$this->db->delete('barang');
	}

    public function insert_barang($barang) {
        return $this->db->insert('barang', $barang);
    }

	public function update_barang($idbarang,$barang){
		$this->db->where('idbarang', $idbarang);
        return $this->db->update('barang', $barang);
	}

}
