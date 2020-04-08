<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lat1 extends CI_Controller {

	public function index(){
		$data["nama"]="Agus";
		$data["asal"]="Bandung";
		$this->load->view('v_latihan1',$data);
	}

	public function method1(){
		$data=array(
			"nama" => "Budi",
			"asal" => "Jakarta"
		);
		$this->load->view('v_latihan1',$data);
	}

	public function method2(){
		$data['mhs']=array("Budi","Jakarta");
		$this->load->view('v_latihan1',$data);
	}

	public function method3(){
		$data['title']="Daftar Mahasiswa";
		$data['daf_mhs']=array(
			array("nama" => "Agus","asal" => "Bandung"),
			array("nama" => "Budi","asal" => "Jakarta"),
			array("nama" => "Roni","asal" => "Surabaya")
		);
		$this->load->view('v_latihan3',$data);
	}
}
