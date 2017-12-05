<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class service extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('m_service');
    }
	public function index()
	{
		$data = $this->m_service->getService();
		$this->load->view('header');
		$this->load->view('view_service', array('mydata' => $data));
	}

	public function form_add_service()
	{
		$this->load->view('header');
		$this->load->view('view_service_create');
	}

	public function add_service(){
         if ('submit'){
            $id_service = $_POST['id_service'];
            $service = $_POST['service'];
            $ket_service = $_POST['ket_service'];
          //  $id_level = $_POST['id_level'];
            $this->m_service->add_service($id_service, $service, $ket_service);
            redirect('service');
        }
    }

	public function form_edit_service($id_service)
	{
	    $data = $this->m_service->get_edit_service($id_service);
        $this->load->view('header');
        $this->load->view('view_service_edit', array('datas' => $data));
	}

	public function edit_service($id_service){
        if ('update'){
            $id_service = $_POST['id_service'];
            $nama_service = $_POST['nama_service'];
            $ket_service = $_POST['ket_service'];
            $this->m_service->edit_service($id_service, $nama_service, $ket_service);
           	 redirect('service');
            }
    }

    public function delete_service($id_service){
          	$this->m_service->delete_service($id_service);
           	 redirect('service');
    }
}
