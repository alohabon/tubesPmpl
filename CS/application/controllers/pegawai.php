<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller {

  public function __construct(){
  parent::__construct();
  $this->load->model('m_pegawai');
  $this->load->helper('form');
  $this->load->library('session');
}

public function index(){
  $this->session->sess_destroy();
  $this->load->view('login');
}

public function login(){
    $data = array(
    'kdPegawai' => $this->input->post('kdPegawai'),
    'password' =>$this->input->post('password')
  );
  $cek = $this->m_pegawai->login($data);
  var_dump($cek);
  if($cek==FALSE){
   $this->session->set_flashdata('login', 'gagal');
   redirect("pegawai");
  }
  else{
   
    $cek = $cek[0]->pekerjaan;
    if ($cek=='admin'){
      $this->session->set_userdata('user', 'admin');
      redirect("admin");
    }
    elseif($cek=='koki'){
      $this->session->set_userdata('user', 'koki');
      redirect("koki");
    }elseif($cek=='pengantar'){
      $this->session->set_userdata('user', 'pengantar');
      redirect("pengantar");
    }
  }
}

public function logout(){
  $this->session->sess_destroy();
  redirect('pegawai');
}

}
?>
