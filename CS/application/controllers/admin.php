<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

  public function __construct(){
  parent::__construct();
  $this->load->model('m_pegawai');
  $this->load->model('m_produk');
  $this->load->model('m_transaksi');
  $this->load->helper('form');
  $this->load->library('session');
}

public function index(){
  redirect("admin/admin_pegawai");
}

public function admin_pegawai(){
  $pegawai = array(
    'pegawai' => $this->m_pegawai->get_data()
  );
  $this->load->view('admin_pegawai', $pegawai); 
}

public function hapusPegawai(){
  $data = $this->input->post('kdPegawai');
  $cek = $this->m_pegawai->hapus($data);
  redirect("admin/admin_pegawai");
}

public function tambahPegawai(){
  $data = array(
    'kdPegawai' => $this->input->post('kdPegawai'),
    'nama' =>$this->input->post('nama'),
    'alamat' => $this->input->post('alamat'),
    'pekerjaan' => $this->input->post('pekerjaan'),
    'password' => $this->input->post('password')
  );
  $cek = $this->m_pegawai->tambah($data);
  if ($cek){
    redirect("admin/admin_pegawai");  
  }else{
    redirect("admin/admin_pegawai");
  }
  
}

public function editPegawai(){
  $data = array(
    'kdPegawai' => $this->input->post('kdPegawai'),
    'nama' =>$this->input->post('nama'),
    'alamat' => $this->input->post('alamat'),
    'pekerjaan' => $this->input->post('pekerjaan')
  );
  $cek = $this->m_pegawai->edit($data);
  redirect("admin/admin_pegawai");
  }

public function admin_produk(){
  $produk = array(
    'produk' => $this->m_produk->get_data()
  );
  $this->load->view('admin_produk', $produk); 
}

public function hapusProduk(){
  $data = $this->input->post('kdProduk');
  $cek = $this->m_produk->hapus($data);
  $x = '.*';
  // unlink("images/produk/".$data.".png");
  array_map('unlink', glob(FCPATH."images/produk/$data.*"));
  redirect("admin/admin_produk");
}

public function tambahProduk(){
  $data = array(
    'kdProduk' => $this->input->post('kdProduk'),
    'nama' =>$this->input->post('nama'),
    'harga' => $this->input->post('harga'),
    'desc' => $this->input->post('desc')
  );
  $cek = $this->m_produk->tambah($data);
  if ($cek){
    $config = array(
    'file_name' => $this->input->post('kdProduk'),
    'upload_path' => "./images/produk/",
    'allowed_types' => "jpg|png|jpeg",
    'overwrite' => TRUE,
    'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
    'max_height' => "768",
    'max_width' => "1024"
    );
    $this->load->library('upload', $config);
    $this->upload->do_upload('gambar');
  }
  redirect("admin/admin_produk");
}



public function editProduk(){
  $data = array(
    'kdProduk' => $this->input->post('kdProduk'),
    'nama' =>$this->input->post('nama'),
    'harga' => $this->input->post('harga'),
    'desc' => $this->input->post('desc')
  );
  // $kode= $this->input->post('kdProduk');
  // array_map('unlink', glob(FCPATH."images/produk/$kode.*"));

  $config = array(
    'file_name' => $this->input->post('kdProduk'),
    'upload_path' => "./images/produk/",
    'allowed_types' => "jpg|png|jpeg",
    'overwrite' => TRUE,
    'max_size' => "2048000", 
    'max_height' => "768",
    'max_width' => "1024"
  );
  $this->load->library('upload', $config);
  $this->upload->do_upload('gambar');
  $this->m_produk->edit($data);
  redirect("admin/admin_produk");
}

public function login(){
  $this->load->view('login');
}

public function admin_pembayaran(){
  $data = array(
    'data' => $this->m_transaksi->getPembayaran()
  );
  $this->load->view('admin_pembayaran',$data); 
}

public function validasiPembayaran(){
  $data =  $this->input->post('kdTrx');
  $this->m_transaksi->validasiPembayaran($data);
  redirect("admin/admin_pembayaran");
}

// public function tolakPembayaran(){
//   $data = $this->input->post('kdTransaksi');
//   $cek = $this->pegawai->hapus($data);
//   redirect("admin/admin_pembayaran");
// }

}
?>
