<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kuesioner extends CI_Controller {

	 public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('m_kuesioner');

    }
	public function index()
	{
		$data = $this->m_kuesioner->getKuesioner();
		$this->load->view('header');
		$this->load->view('view_kuesioner', array('mydata' => $data));
	}

	public function form_add_kuesioner()
	{
        $data = $this->m_kuesioner->control();
		$this->load->view('header');
		$this->load->view('view_kuesioner_create', array('control' => $data));
	}

	public function add_kuesioner(){
         if ('submit'){
            $id_kuesioner = $_POST['id_kuesioner'];
            $kuesioner = $_POST['kuesioner'];
            $id_co = $_POST['id_co'];
            $this->m_kuesioner->add_kuesioner($id_kuesioner, $kuesioner, $id_co);
            redirect('kuesioner');
        }
    }

	public function form_edit_kuesioner($id_kuesioner)
	{
	    $data = $this->m_kuesioner->get_edit_kuesioner($id_kuesioner);
        $this->load->view('header');
        $this->load->view('view_kuesioner_edit', array('datas' => $data));

	}

	public function edit_kuesioner($id_kuesioner){
        if ('update'){
            $id_kuesioner = $_POST['id_kuesioner'];
            $kuesioner = $_POST['kuesioner'];            
            $id_co = $_POST['id_co'];
            $this->m_kuesioner->edit_kuesioner($id_kuesioner, $kuesioner, $id_co);
           	redirect('kuesioner');
            }
    }

    public function delete_kuesioner($id_kuesioner){
          	$this->m_kuesioner->delete_kuesioner($id_kuesioner);
           	redirect('kuesioner');
    }
}
