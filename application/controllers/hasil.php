<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hasil extends CI_Controller {

   public function __construct()
   {

    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('session');
    $this->load->model('m_hasil');

}

public function index()
{   
    $data = $this->m_hasil->getPeriode();
    $this->load->view('header');
    $this->load->view('view_hasil', array('mydata' => $data));
}

public function view_hasil_final($id_periode)
{   
    $data = $this->m_hasil->get_hasil_final($id_periode);
    $datas = $this->m_hasil->get_rata_final($id_periode);
    $datass = $this->m_hasil->get_hasil_co($id_periode);
    $datasss = $this->m_hasil->get_nilai_harapan($id_periode);
    $this->load->view('header');
    $this->load->view('view_hasil_final', array('mydata' => $data, 'mydatas' => $datas, 'mydatass' => $datass, 'mydatasss' => $datasss));
}

public function view_detail_co($id_co)
{   
    $data = $this->m_hasil->get_detail_co($id_co);
    $this->load->view('header');
    $this->load->view('view_detail_co', array('mydata' => $data));
}

public function view_detail_maturity($id_maturity)
{   
    $data = $this->m_hasil->get_maturity($id_maturity);
    $this->load->view('header');
    $this->load->view('view_detail_maturity', array('mydata' => $data));
}
}
