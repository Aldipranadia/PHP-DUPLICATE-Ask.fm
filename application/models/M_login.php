<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct() {
        $this->load->database();
        $this->load->helper('url');
    }

    public function user_login($username,$password) {
        // $query = $this->db->query("SELECT * from akun where username='".$username."' and password='".$password."'");
        $this->db->select('username,password');
        $array = array('username' => $username, 'password' => $password);
        $this->db->where($array);
        $query = $this->db->get('akun');
        if ($query==true){
            return true;
        }
        else{
            return false;
        }
    }	
}