<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('m_user');
    }
	public function index()
	{
		$data = $this->m_user->getUser();
		$this->load->view('header');
		$this->load->view('view_user', array('mydata' => $data));
	}

	public function form_add_user()
	{
		$data = $this->m_user->level();
		$this->load->view('header');
		$this->load->view('view_user_create', array('level' => $data));
	}

	public function add_user(){
         if ('submit'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $jabatan = $_POST['jabatan'];
            $id_level = $_POST['id_level'];
            $this->m_user->add_user($username, $password, $jabatan, $id_level);
            redirect('user');
        }
    }

	public function form_edit_user($id_user)
	{
	    $data = $this->m_user->get_edit_user($id_user);
        $datas = $this->m_user->level();
        $this->load->view('header');
        $this->load->view('view_user_edit', array('datas' => $data, 'level' => $datas));

	}

	public function edit_user($id_user){
        if ('update'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $jabatan = $_POST['jabatan'];
            $this->m_user->edit_user($id_user, $username, $password, $jabatan);
            redirect('user');
            }
    }

    public function delete_user($id_user){
          	$this->m_user->delete_user($id_user);
            redirect('user');
    }
}
