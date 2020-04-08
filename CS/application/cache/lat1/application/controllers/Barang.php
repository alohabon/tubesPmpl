<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller {

    public function __construct(){
            parent::__construct();
			$this->load->model('m_barang');
			$this->load->helper('url');
			$this->load->library('session');
    }

	public function cek_login() {
		if(!$this->session->has_userdata('uid')){
			$this->session->set_flashdata('message',
			                     'sesi anda berakhir silahkan login kembali');
			redirect('login/form_login');
			exit;
		}
	}
	public function lihat_daftar(){
		$this->cek_login();
		$data['title'] = 'Daftar Barang';
		$data['barang']['entries'] = $this->m_barang->get_barang();
		$this->load->view('v_daftar_barang',$data);
	}
	public function logout(){
		$array_items = array('uid');
		$this->session->unset_userdata($array_items);
		$this->load->view('v_logout');
	}

	public function lihat_detail($idbarang=0){
		$this->cek_login();
		$data['barang'] = $this->m_barang->get_barang_byid($idbarang);
		$data['title'] = 'Detail Barang';
		$this->load->view('v_detail_barang',$data);
	}

	public function proses_hapus($idbarang=0){
		$this->cek_login();
		$this->m_barang->delete_barang($idbarang);
        redirect('barang/lihat_daftar');
	}
	public function form_ubah($idbarang=0){
		$this->cek_login();
		$data['idbarang'] = $idbarang;
		$data['barang'] = $this->m_barang->get_barang_byid($idbarang);
		$data['title'] = 'Edit Admin';
		$this->load->view('v_ubah_barnag',$data);
	}
	public function proses_ubah($idbarang){
        $barang = array(
            'idbarang' => $this->input->post('idbarang'),
            'namabarang' => $this->input->post('namabarang'),
        );
		$this->m_barang->update_barang($idbarang,$barang);
        redirect('barang/lihat_daftar');
	}
	public function form_tambah(){
		$this->cek_login();
		$data['title'] = 'Tambah barang';
		$this->load->view('v_tambah_barang',$data);
	}
	public function proses_tambah(){
        $barang = array(
            'idbarang' => $this->input->post('idbarang'),
            'namabarang' => $this->input->post('namabarang'),
        );
		$this->m_barang->insert_barang($barang);
        redirect('barang/lihat_daftar');
	}
}
