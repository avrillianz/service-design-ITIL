<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('m_login');

	}
	public function index()
	{		
		$this->load->view('view_login');
	}

	public function login(){
		if('login')
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$detail = $this->m_login->getLevel($username, $password);
			$cek = $this->m_login->getLogin($username, $password); 
			if($cek > 0){
				$_SESSION['id_user'] = $detail[0]['id_user'];
				$_SESSION['jabatan'] = $detail[0]['jabatan'];
				$_SESSION['login'] = TRUE;
				$_SESSION['password'] = $password;
				$_SESSION['username'] = $username;
				$_SESSION['level'] = $detail[0]['id_level'];
				$this->session->set_flashdata('error', 'Anda Berhasil Login');
				echo '<script type="text/javascript">alert("Anda Berhasil Login!.")</script>';
				redirect('/dashboard');
			} else {
				$this->session->set_flashdata('error', 'Data tidak Valid');
				echo '<script type="text/javascript">alert("Login Gagal!.")</script>';;
				redirect('/login');
				
			}
		} 
	}
	public function logout(){
		session_destroy();
		redirect(base_url());
	}
}
