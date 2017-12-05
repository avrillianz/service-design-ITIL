<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control extends CI_Controller {

	 public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('m_control');

    }
	public function index()
	{
		$data = $this->m_control->getControl();
		$this->load->view('header');
		$this->load->view('view_control', array('mydata' => $data));
	}

	public function form_add_control()
	{
		$this->load->view('header');
		$this->load->view('view_control_create');
	}

	public function add_control(){
         if ('submit'){
            $id_co = $_POST['id_co'];
            $control = $_POST['control'];
            $area = $_POST['area'];
            $ket_control = $_POST['ket_control'];
            $this->m_control->add_control($id_co, $control, $area, $ket_control);
            redirect('control');
        }
    }

	public function form_edit_control($id_co)
	{
	    $data = $this->m_control->get_edit_control($id_co);
        $this->load->view('header');
        $this->load->view('view_control_edit', array('datas' => $data));

	}

	public function edit_control($id_co){
        if ('update'){
            $id_co = $_POST['id_co'];
            $control = $_POST['control'];
            $area = $_POST['area'];
            $ket_control = $_POST['ket_control'];
            $this->m_control->edit_control($id_co, $control, $area, $ket_control);
            redirect('control');
            }
    }

    public function delete_control($id_co){
          	$this->m_control->delete_control($id_co);
            redirect('control');
    }
}
