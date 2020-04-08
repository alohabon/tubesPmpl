<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_mahasiswa() {
        return $this->db->get('mahasiswa');
    }

    public function get_mahasiswa_bynim($nim) {
        $query = $this->db->get_where('mahasiswa', array('nim' => $nim));
        return $query->row_array();
    }

	public function delete_mahasiswa($nim){
		$this->db->where('nim', $nim);
		$this->db->delete('mahasiswa');
	}
	
    public function insert_mahasiswa($mhs) {
        return $this->db->insert('mahasiswa', $mhs);
    }
	
	public function update_mahasiswa($nim,$mhs){
		$this->db->where('nim', $nim);
        return $this->db->update('mahasiswa', $mhs);
	}
	
}