<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class periode extends CI_Controller {

	 public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('m_periode');

    }
	public function index()
	{
		$data = $this->m_periode->getPeriode();
		$this->load->view('header');
		$this->load->view('view_periode', array('mydata' => $data));
	}

	public function form_add_periode()
	{
        $data = $this->m_periode->get_id_periode();
        $this->load->view('header');
        $this->load->view('view_periode_create', array('datas' => $data) );

	}

	public function add_periode(){

        $input=array(
            'id_periode' => $this->input->post('id_periode'),
            'periode_awal' => $this->input->post('periode_awal'),
            'periode_akhir' => $this->input->post('periode_akhir')
            );

        $cek = $this->m_periode->cek($input);
        if($cek == true){
            $this->session->set_flashdata('message','periode sudah ada, silahkan input lagi'); 
            redirect('periode/form_add_periode');
        } else {            
            $logic = $this->m_periode->input_periode($input);

            if($logic==true){
                $this->session->set_flashdata('message','input berhasil'); 
                $this->index();
            } else {
                $this->session->set_flashdata('message','input gagal'); 
                redirect('periode/form_add_periode');
            }
        }
  
    }

	public function form_edit_periode($id_periode)
	{
	    $data = $this->m_periode->get_edit_periode($id_periode);
        $this->load->view('header');
        $this->load->view('view_periode_edit', array('datas' => $data));

	}

	public function edit_periode($id_periode){
        $input=array(
            'id_periode' => $this->input->post('id_periode'),
            'periode_awal' => $this->input->post('periode_awal'),
            'periode_akhir' => $this->input->post('periode_akhir')
            );
        $id_periode = $_POST['id_periode'];
        $cek = $this->m_periode->cek($input);
        if($cek == true){
            $this->session->set_flashdata('message','periode sudah ada'); 
            redirect('periode/form_edit_periode/'.$id_periode);
        } else {            
            $logic = $this->m_periode->edit_periode($input);

            if($logic=true){
                $this->session->set_flashdata('message','input berhasil'); 
                $this->index();
            } else {
                $this->session->set_flashdata('message','input gagal'); 
                redirect('periode/form_edit_periode/'.$id_periode);
            }
        }
    }

    public function delete_periode($id_periode){
          	$this->m_periode->delete_periode($id_periode);
           	redirect('periode');
    }
}
  