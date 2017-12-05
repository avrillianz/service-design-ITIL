<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nilai extends CI_Controller {

	 public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('m_nilai');

    }
	public function index()
	{
		$data = $this->m_nilai->get_nilai();
      
		$this->load->view('header');
		$this->load->view('view_nilai', array('mydata' => $data));
	}

	public function form_add_nilai()
	{
        $data = $this->m_nilai->get_maturity();
        $id = $this->m_nilai->get_periode();
        $this->load->view('header');
        $this->load->view('view_nilai_create', array('level' => $data, 'periode' => $id));
	}

	public function add_nilai(){
         if ('submit'){
            $nilai_harapan = $_POST['level'];
            $id_periode = $_POST['id_periode'];
            $keterangan = $_POST['keterangan'];
            $this->m_nilai->add_nilai($nilai_harapan, $id_periode, $keterangan);
            $this->index();
        }
    }

    public function form_edit_nilai($id_nilai)
    {
        $data = $this->m_nilai->get_edit_nilai($id_nilai);
        $datas = $this->m_nilai->get_maturity();
        $this->load->view('header');
        $this->load->view('view_nilai_edit', array('datas' => $data, 'maturity' => $datas));

    }

    public function edit_nilai($id_nilai){
        if ('update'){
            $keterangan = $_POST['keterangan'];
            $this->m_nilai->edit_nilai($id_nilai, $keterangan);
            $this->index();
            }
    }
}
