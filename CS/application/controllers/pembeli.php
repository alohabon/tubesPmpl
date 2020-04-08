<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembeli extends CI_Controller {

    public function __construct(){
    parent::__construct();
    $this->load->model('m_produk');
    $this->load->model('m_transaksi');
    $this->load->model('m_pembeli');
    $this->load->helper('form');
    $this->load->library('session');
  }

  public function index(){
    redirect("pembeli/home");
  }

  public function home(){
    $produk = array(
      'cart' => $this->m_transaksi->cart()
    );
    $this->load->view('home',$produk); 
  }
  public function products(){
    $produk = array(
      'produk' => $this->m_produk->get_data(),
      'cart' => $this->m_transaksi->cart()
    );
    $this->load->view('products',$produk); 
  }
  public function about(){
    $produk = array(
      'cart' => $this->m_transaksi->cart()
    );
    $this->load->view('about',$produk); 
  }
  public function contact(){
    $produk = array(
      'cart' => $this->m_transaksi->cart()
    );
    $this->load->view('contact',$produk); 
  }
  public function singlepage($kdProduk=NULL){
    $produk = array(
      'produk' => $this->m_produk->get_data(),
      'data' => $this->m_produk->get_data_bykode($kdProduk),
      'cart' => $this->m_transaksi->cart()
    );
    $this->load->view('singlepage',$produk);

  }
  public function checkout(){
    $produk = array(
      'cart' => $this->m_transaksi->cart()
    );
    $this->load->view('checkout',$produk); 
  }

  public function bayar(){
    $kdPembeli = $this->m_pembeli->getRows(); 
    $kdPembeli = "c".$kdPembeli; 
    $data = array(
    'kdPembeli' => $kdPembeli,
     'nama' => $this->input->post('nama'),
     'email' =>$this->input->post('email'),
     'noTlp' =>$this->input->post('noTlp'),
     'alamat' => $this->input->post('alamat')
   );
   $this->m_pembeli->tambah($data);
   $this->m_transaksi->setPembeli($kdPembeli);
   $cek = $this->m_transaksi->createTable();
   $this->session->set_flashdata('data', $cek);
   redirect("pembeli/products");  
  }

  public function buy(){
    if ($this->input->post('kuantitas') > 0){
      $hargaTotal =  $this->input->post('kuantitas') * $this->input->post('harga');
        $data = array(
         'produk' => $this->input->post('kdProduk'),
         'kuantitas' =>$this->input->post('kuantitas'),
         'harga' => $this->input->post('harga'),
         'total' => $hargaTotal
       );
       $cek = $this->m_transaksi->tambahProduk($data); 
    }
     redirect("pembeli/products");  
  }

  public function cari(){
    $cek = $this->m_transaksi->cari($this->input->post('cari'));
    if ($cek != FALSE){
      $this->session->set_flashdata('cari', $cek);
    }else {
       $this->session->set_flashdata('cari', "Pesanan tidak terdaftar");
    }
    redirect("pembeli/home");  
    
    
  }

}?>