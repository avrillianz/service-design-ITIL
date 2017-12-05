<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maturity extends CI_Controller {

	 public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('m_maturity');

    }
	public function index()
	{
		$data = $this->m_maturity->getMaturity();
		$this->load->view('header');
		$this->load->view('view_maturity', array('mydata' => $data));
	}

	public function form_add_maturity()
	{
        $this->load->view('header');
        $this->load->view('view_maturity_create');

	}

	public function add_maturity(){
         if ('submit'){
            $level = $_POST['level'];
            $maturity = $_POST['maturity'];
            $ket = $_POST['ket'];
          //  $id_level = $_POST['id_level'];
            $this->m_maturity->add_maturity($level, $maturity, $ket);
            redirect('maturity');
        }
    }

	public function form_edit_maturity($id_maturity)
	{
	    $data = $this->m_maturity->get_edit_maturity($id_maturity);
        $this->load->view('header');
        $this->load->view('view_maturity_edit', array('datas' => $data));

	}

	public function edit_maturity($id_maturity){
        if ('update'){
            $level = $_POST['level'];
            $maturity = $_POST['maturity'];
            $ket = $_POST['ket'];
            $this->m_maturity->edit_maturity($id_maturity, $level, $maturity, $ket);
           	redirect('maturity');
            }
    }

    public function delete_maturity($id_maturity){
          	$this->m_maturity->delete_maturity($id_maturity);
            redirect('maturity');
    }

    public function view_maturity_level()
    {   
        $data = $this->m_maturity->getMaturity();
        $this->load->view('header');
        $this->load->view('view_maturity_level', array('mydata' => $data));
    }


}
