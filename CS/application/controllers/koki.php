<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class koki extends CI_Controller {

  public function __construct(){
  parent::__construct();
  $this->load->model('m_transaksi');
  $this->load->library('session');
}

public function index(){
  
  $data = array();
  foreach ($this->m_transaksi->getPesanan() as $kds) {
  	$data[ $kds->kdTrx] = $this->m_transaksi->getPesananDetil($kds->kdTrx);
  }
  $kd = array(
    'data' => $data
  );
  $this->load->view('koki',$kd); 
}

public function validasiProduksi(){
  $data =  $this->input->post('kdTrx');
  $this->m_transaksi->validasiProduksi($data);
  redirect("koki");
}


}
?>
