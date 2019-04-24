<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_login');
	}
 
	public function index(){		
		$data['judul'] = "Halaman login";
		$this->load->view('v_login',$data);
	}
	
	public function proses_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$hasil=$this->m_login->user_login($username,$password);

		if ($hasil) {
			redirect('https://www.google.com/');
		}
		else{
			$this->session->set_flashdata('message','login anda salah, silahkan login kembali');
			redirect('https://www.detik.com/');
		}
	}
}