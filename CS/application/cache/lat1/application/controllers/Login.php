<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
            parent::__construct();
			$this->load->model('m_user');
			$this->load->helper('url');
			$this->load->library('session');
    }

	public function form_login(){
		$data['title'] = 'Login';
		$this->load->view('v_form_login',$data);
	}
	public function proses_login(){
        $uid = $this->input->post('uid');
        $pwd = $this->input->post('pwd');
		$hasil=$this->m_user->is_user_login_ok($uid,$pwd);
		if ($hasil['ada']>0) {
			$this->session->set_userdata('uid', $uid);
			redirect('barang/lihat_daftar');
		}
		else {
			$this->session->set_flashdata('message', 'login anda salah, silahkan login kembali');
			redirect('login/form_login');
		}
	}
}
