<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengantar extends CI_Controller {

  public function __construct(){
  parent::__construct();
  $this->load->model('m_transaksi');
  $this->load->library('session');
}

public function index(){
 $data = array(
    'data' => $this->m_transaksi->getPengantaran()
  );
  $this->load->view('pengantar', $data); 
}

public function validasiPengantaran(){
  $data =  $this->input->post('kdTrx');
  $this->m_transaksi->validasiPengantaran($data);
  redirect("pengantar");
}


}
?>
