<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rekomendasi extends CI_Controller {

	 public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('m_rekomendasi');

    }
	public function index()
	{
		$data = $this->m_rekomendasi->get_periode();
		$this->load->view('header');
		$this->load->view('view_rekomendasi', array('mydata' => $data));
	}

    public function view_rekomendasi_detail($id_periode)
    {
        $data = $this->m_rekomendasi->get_rekomendasi($id_periode);
        $datass = $this->m_rekomendasi->get_hasil_co($id_periode);
        $id = $this->m_rekomendasi->get_id_rekomendasi();
        $datasss = $this->m_rekomendasi->get_nilai($id_periode);
        $this->load->view('header');
        $this->load->view('view_rekomendasi_detail', array('mydata' => $data, 'mydatas' => $id, 'mydatass' => $datass, 'mydatasss' => $datasss));
    }


	public function form_add_rekomendasi($id_co, $id_periode)
	{
        $data = $this->m_rekomendasi->get_detail_co($id_co);
        $datasss = $this->m_rekomendasi->get_nilai($id_periode);
        $this->load->view('header');
        $this->load->view('view_rekomendasi_create', array('mydata' => $data, 'mydatasss' => $datasss));
	}

	public function add_rekomendasi(){
         if ('submit'){
            $id_periode = $_SESSION['level'];
            $temuan = $_POST['temuan'];
            $rekomendasi = $_POST['rekomendasi'];
            $this->m_rekomendasi->add_rekomendasi($id_periode, $temuan, $rekomendasi);
            $this->index();
        }
    }

    public function form_edit_rekomendasi($id_rekomendasi)
    {
        $data = $this->m_rekomendasi->get_edit_rekomendasi($id_rekomendasi);
        $this->load->view('header');
        $this->load->view('view_rekomendasi_edit', array('datas' => $data));

    }

    public function edit_rekomendasi($id_rekomendasi){
        if ('update'){
            $id_rekomendasi = $_POST['id_rekomendasi'];
            $temuan = $_POST['temuan'];
            $rekomendasi = $_POST['rekomendasi'];
            $this->m_rekomendasi->edit_rekomendasi($id_rekomendasi, $temuan, $rekomendasi);
            $this->index();
            }
    }

    public function view_detail_rekomendasi($id_periode){
        $data = $this->m_rekomendasi->get_detail_rekomendasi($id_periode);
        $this->load->view('header');
        $this->load->view('view_detail_rekomendasi', array('mydata' => $data));

    }

     public function view_rekomendasi_hasil(){
        $data = $this->m_rekomendasi->get_periode();
        $this->load->view('header');
        $this->load->view('view_rekomendasi_hasil', array('mydata' => $data));

    }

    public function get_kuesioner(){
        $result = $this->db->query("select id_kuesioner from jawaban join rekomendasi on rekomendasi.id_rekomendasi = jawaban.id_rekomendasi")->result_array();
    }

}
