<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Signup extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_signup');
		$this->load->helper('url');
	}
 
	public function index(){		
		$data['judul'] = "Halaman signup";
		$this->load->view('v_signup',$data);
	}
	
	public function tambahAkun()
	{
		$this->m_signup->insert_akun();
    redirect('home');
	}
}