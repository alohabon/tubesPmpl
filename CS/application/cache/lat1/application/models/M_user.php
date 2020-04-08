<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function is_user_login_ok($uid,$pwd) {
        $query = $this->db->query("select count(*) as ada from user".
		                          " where userid='$uid' and password='$pwd'");
        return $query->row_array();
    }	
}